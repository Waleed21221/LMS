<?php

namespace App\Imports;

use App\Course;
use App\Degree;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;

class CourseImport implements ToModel, WithHeadingRow,WithValidation

{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Course([
            'degree_code'   => $row['degree_code'],
            'course_code'     => $row['course_code'],
            'course_name'    => $row['course_name'], 
        ]);
    }

    public function  rules(): array {
        return [
            '*.degree_code'    =>  'required|unique:courses',
            '*.course_name'     =>  'required|unique:courses',
            '*.course_code'     =>  'required|unique:courses',  
           
        ];
    }
}

