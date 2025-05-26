<?php

namespace App\Exports\Forestry\Tenurial;

use App\Models\Forestry\Tenurial\TenurialInstrument;
use Maatwebsite\Excel\Concerns\{
    FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles, WithEvents
};
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;
use Carbon\Carbon;

class ExportClientData implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles, WithEvents
{
    protected $clientId;
    protected $status;

    public function __construct($clientId, $status)
    {
        $this->clientId = $clientId;
        $this->status = $status;
    }

    public function collection()
    {
        return TenurialInstrument::where('client_id', $this->clientId)
                                  ->where('status', $this->status)
                                  ->get();
    }

    public function map($row): array
    {
        $issueDate = $this->parseDate($row->issue_date);
        $expiredDate = $this->parseDate($row->expired_date);

        return [
            $row->name_lessee ?? '-',
            $row->tenur_no ?? '-',
            $row->total_area ?? '-',
            $issueDate,
            $expiredDate,
            $row->status ?? '-',
            $row->remarks ?? '-',
        ];
    }

    private function parseDate($dateString)
    {
        try {
            return $dateString ? Carbon::parse($dateString)->format('Y-m-d') : '-';
        } catch (\Exception $e) {
            return $dateString ?: '-';
        }
    }

    public function headings(): array
    {
        return [
            'Name of Lessee',
            'Tenurial No.',
            'Total Area',
            'Issue Date',
            'Expired Date',
            'Status',
            'Remarks',
        ];
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
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $highestColumn = $sheet->getHighestColumn();
                $highestRow = $sheet->getHighestRow();
                $sheet->setAutoFilter("A1:{$highestColumn}{$highestRow}");
            },
        ];
    }
}
