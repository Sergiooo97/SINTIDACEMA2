<?php

namespace App\Exports;

use App\Models\materiales;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class materialesG implements  FromView, WithDrawings, WithTitle,  WithEvents, ShouldAutoSize
{
    protected $materiales;
    public function __construct($materiales=null)
    {
        $this->materiales=$materiales;
    }

    public function view(): View {
        $materiales=$this->materiales;
        return view("exports.excel.reporte_general",compact("materiales"));
    }
   

    public function drawings()
    {
        $draw_ceneae = new Drawing();
        $draw_ceneae->setName('Logo');
        $draw_ceneae->setDescription('This is my logo');
        $draw_ceneae->setPath(public_path('/imagen/otro.png'));
        $draw_ceneae->setHeight(50);
        $draw_ceneae->setCoordinates('A1');
        return [$draw_ceneae];
    }
        public function title(): string
    {
        return 'primer grado ';
    }
    public function registerEvents(): array
{
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A8:W1000';
                // Landscope orientation
                $event->sheet->getDelegate()->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(11);
                $event->sheet->getStyle('A8:G1000')->applyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                    ]
                ]);
        }
        ];
}
}
