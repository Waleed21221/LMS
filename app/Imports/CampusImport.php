<?php

namespace App\Imports;

use App\Campus;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;

class CampusImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       
            return new Campus([
                'name'     => $row['name'],
                'phone'    => $row['phone'], 
                'fax'      => $row['fax'],
                'email'    => $row['email'],
                'address'  => $row['address'], 
               
        ]);
    }

    public function  rules(): array {
        return [
            '*.name' => 'unique:campuses',
            '*.phone' => 'required',
            '*.fax' => 'required',
            '*.email' => 'unique:campuses',
            '*.address' => 'required',
           
        ];
    }
}
