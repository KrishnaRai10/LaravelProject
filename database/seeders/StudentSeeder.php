<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $students=collect([
    //         [
    //         'name'=>"trailTest",
    //         'email'=>"trialTest@gmail.com",
    //         ],
    //         [
    //         'name'=>"tarun",
    //         'email'=>"tarunTest@gmail.com",
    //         ],
    //         [
    //         'name'=>"abhishek",
    //         'email'=>"abishekTest@gmail.com",
    //         ],]
    // );

    $json=File::get(path:'database/json/student.json');
    $students=collect(json_decode($json));
    $students->each(function($student){
         student::create([
            'name'=>$student->name,
            'email'=>$student->email
            
        ]);
    });
        // student::create([
            
            
        // ]);
    }
}
