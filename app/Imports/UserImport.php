<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;

use App\User;
use App\Student;

class UserImport implements ToCollection, WithHeadingRow, WithValidation
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
                    
                ]);
    
                Student::create([
            'degree_code'     => $row['degree_code'],
            'student_id'     => $row['student_id'],
            'first_name'     => $row['first_name'],
            'last_name'     => $row['last_name'],
            'contact_number'    => $row['contact_number'],
            
                ]);
            }
        }
    
        public function  rules(): array {
            return [
                
                'name'     => 'required',
                'email'     => 'required|unique:users',
                'degree_code'     => 'required|unique:students',
                'student_id'     => 'required|unique:students',
                'first_name'     => 'required',
                'last_name'     => 'required',
                'contact_number'    => 'required',
                 
            ];
        }

}
