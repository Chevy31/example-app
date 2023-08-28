<?php

namespace App\Exports;

use App\Models\Input;
use Maatwebsite\Excel\Concerns\FromCollection;

class InputExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Input::all();
    }
}
