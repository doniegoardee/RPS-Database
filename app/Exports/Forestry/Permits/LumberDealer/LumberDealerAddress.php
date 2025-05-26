<?php


namespace App\Exports\Forestry\Permits\LumberDealer;

use App\Models\Forestry\Permits\LumDealer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class LumberDealerAddress implements FromCollection, WithHeadings, WithEvents, WithColumnWidths
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
                        'supplier_name',
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
            'Supplier Name',
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
            'G' => 25,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter('A1:G1');
            },
        ];
    }
}
