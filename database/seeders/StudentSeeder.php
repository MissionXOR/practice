<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    
    public function run()
    {
        // student::create([
        //     'name'=>'Jovan Ifta Aminul',
        //     'email'=> 'jovan@gmail.com'
        // ]);
        // $students =collect(
        //     [
        //         [
        //             'name'=>'anindita',
        //             'email'=>'anindita@gmail.com'
        //         ],
        //         [
        //             'name'=>'anindita20',
        //             'email'=>'anindita20@gmail.com'
        //         ],
        //         [
        //             'name'=>'anindita25',
        //             'email'=>'anindita25@gmail.com'
        //         ]
        //     ]
        // );

        $json=File::get(path:'database/json/student.json');
        $students=collect(json_decode($json));
        $students->each(function ($student) {
            // student::insert($student);
             student::create([
                'name'=> $student->name,
                'email'=> $student->email,
                'age'=> $student->age,
             ]);

            //for fake data 
            //   student::create([
            // 'name'=> fake()->name(),
            //  'email'=> fake()->unique()->email()
            //  ]);
    });
}
}
