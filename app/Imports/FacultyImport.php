<?php

namespace App\Imports;

use App\Faculty;
use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;

class FacultyImport implements ToCollection, WithHeadingRow, WithValidation
{
     /**
    * @param Collection $collection
    */
    
    public function collection(Collection $rows)    
    {
        foreach ($rows as $row) 
        {
            User::create([
            'name' => $row['name'],
            'email' => $row['email'],
            'role' => 'teacher',
            
        ]);

        Faculty::create([
            'staff_code'     => $row['staff_code'],
            'first_name'     => $row['first_name'],
            'last_name'     => $row['last_name'],
            'contact_number'    => $row['contact_number'],
            
        ]);
      }

    }

    public function  rules(): array {
        return [
            '*.name'     => 'required',
            '*.email'     => 'required|unique:users', 
            '*.staff_code'  =>   'required|unique:faculties',
            '*.first_name'  =>  'required',
            '*.last_name'   =>  'required',
            '*.contact_number'=>    'required',
             
        ];
    }
}
