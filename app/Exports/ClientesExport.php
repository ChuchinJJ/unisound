<?php

namespace App\Exports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ClientesExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cliente::orderBy('id_usuario','asc')->get();
    }

    public function map($cliente): array
    {
        return [
            $cliente->id_usuario,
            $cliente->email,
            $cliente->nombre,
            $cliente->apellidos,
            $cliente->telefono,
            $cliente->rfc,
            $cliente->pais,
            $cliente->estado,
            $cliente->ciudad,
            $cliente->calle,
            $cliente->cp,
            $cliente->fecha_nac
        ];
    }

    public function headings(): array
    {
        return [
            'Número',
            'Email',
            'Nombre',
            'Apellidos',
            'Teléfono',
            'RFC',
            'País',
            'Estado',
            'Ciudad',
            'Calle',
            'CP',
            'Fecha de Nacimiento'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true, 'size' => 12]],
        ];
    }
}
