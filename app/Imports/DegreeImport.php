<?php

namespace App\Imports;

use App\Degree;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;


class DegreeImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    { 
       return new Degree([
        'degree_code'     => $row['degree_code'],
        'degree_name'    => $row['degree_name'], 
        ]);
        }

        public function  rules(): array {
            return [
                '*.degree_code' => 'unique:degrees',
                '*.degree_name' => 'required',
            ];
        }
}
