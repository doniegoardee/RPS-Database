<?php


namespace App\Exports\Forestry\Permits\LumberSupplier;

use App\Models\Forestry\Permits\LumDealer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class LumberSupplierAddress implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
{
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function collection()
    {
        return LumDealer::where('client_address', $this->address)
                    ->get([
                        'name',
                        'business_name',
                        'location',
                        'volume',
                        'date_issuance',
                        'date_expiration',
                    ]);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Business Name',
            'Location',
            'Volume',
            'Date Issuance',
            'Date Expiration',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 30,
            'C' => 20,
            'D' => 15,
            'E' => 15,
            'F' => 20,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:F1');
            },
        ];
    }
}
