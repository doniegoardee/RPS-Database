<?php

namespace App\Exports\Forestry\Tenurial;

use App\Models\Forestry\Tenurial\TenurialInstrument;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithHeadings, WithMapping,
    WithTitle, WithStyles, WithEvents, ShouldAutoSize
};
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;

class ExportStatus implements FromCollection, WithHeadings, WithMapping, WithTitle, WithStyles, WithEvents, ShouldAutoSize
{
    protected $address;
    protected $status;
    protected $type;

    public function __construct($address, $status, $type)
{
    $this->address = $address;
    $this->status = $status;
    $this->type = $type;
}

public function collection()
{
    return TenurialInstrument::with('tenurType')
        ->where('client_address', $this->address)
        ->where('status', $this->status)
        ->where('tenur_type', $this->type)
        ->get();
}

public function map($row): array
{
    return [
        $row->tenur_type ?? '-',
        $row->name_lessee ?? '-',
        $row->tenur_no ?? '-',
        $row->total_area ?? '-',
        $this->formatDate($row->issue_date),
        $this->formatDate($row->expired_date),
        $row->status ?? '-',
        $row->remarks ?? '-',
    ];
}

protected function formatDate($date)
{
    try {
        return $date ? Carbon::parse($date)->format('Y-m-d') : 'N/A';
    } catch (\Exception $e) {
        return 'Invalid Date';
    }
}

    public function headings(): array
    {
        return [
            'Tenurial Type',
            'Name of Lessee',
            'Tenurial No.',
            'Total Area',
            'Issue Date',
            'Expired Date',
            'Status',
            'Remarks',
        ];
    }

    public function title(): string
    {
        return ucfirst($this->status) . ' Tenurial Instruments';
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:H1')->applyFromArray([
                    'font' => ['bold' => true],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => ['argb' => 'FFD9EDF7'],
                    ],
                    'borders' => [
                        'allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                    ],
                ]);

                $event->sheet->getDelegate()->setAutoFilter(
                    $event->sheet->getDelegate()->calculateWorksheetDimension()
                );
            },
        ];
    }
}
