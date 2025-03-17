<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRegistrationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('userregistrations')->insert([
            [
                'regNo' => 'CA001',
                'firstName' => 'Terry',
                'middleName' => 'K.',
                'lastName' => 'Rodriquez',
                'gender' => 'Male',
                'contactNo' => '1325458888',
                'email' => 'terry@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2020-11-05 09:51:33',
                'updationDate' => '2021-06-03 10:35:38',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA002',
                'firstName' => 'Bruce',
                'middleName' => 'E.',
                'lastName' => 'Murphy',
                'gender' => 'Male',
                'contactNo' => '1346565650',
                'email' => 'bruce@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2020-11-05 04:46:33',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA003',
                'firstName' => 'Richard',
                'middleName' => 'J.',
                'lastName' => 'Summers',
                'gender' => 'Male',
                'contactNo' => '1325658800',
                'email' => 'richards@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2020-11-05 04:54:33',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA004',
                'firstName' => 'Ross',
                'middleName' => 'S.',
                'lastName' => 'Daniels',
                'gender' => 'Male',
                'contactNo' => '6958545850',
                'email' => 'ross@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => now(),
                'updationDate' => now(),
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA005',
                'firstName' => 'Colin',
                'middleName' => 'B',
                'lastName' => 'Greenwood',
                'gender' => 'Male',
                'contactNo' => '7541112050',
                'email' => 'colin@gmail.com',
                'password' => Hash::make('password123'),
                'regDate' => now(),
                'updationDate' => now(),
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA006',
                'firstName' => 'Jennifer',
                'middleName' => 'J.',
                'lastName' => 'Frye',
                'gender' => 'Female',
                'contactNo' => '7895555544',
                'email' => 'jennifer@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => now(),
                'updationDate' => now(),
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA007',
                'firstName' => 'Bonnie',
                'middleName' => 'J.',
                'lastName' => 'Lamar',
                'gender' => 'Female',
                'contactNo' => '4580001014',
                'email' => 'bonnie@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:51:00',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA008',
                'firstName' => 'Adam',
                'middleName' => 'A.',
                'lastName' => 'Rios',
                'gender' => 'Male',
                'contactNo' => '4785690010',
                'email' => 'adam@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:52:28',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA009',
                'firstName' => 'Nancy',
                'middleName' => 'W.',
                'lastName' => 'Vasquez',
                'gender' => 'Female',
                'contactNo' => '3547777770',
                'email' => 'nancy@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:53:19',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA010',
                'firstName' => 'Jerry',
                'middleName' => 'A.',
                'lastName' => 'Burdine',
                'gender' => 'Male',
                'contactNo' => '8520001450',
                'email' => 'jerry@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:53:58',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA011',
                'firstName' => 'James',
                'middleName' => 'K.',
                'lastName' => 'Fischer',
                'gender' => 'Male',
                'contactNo' => '4785470014',
                'email' => 'jamesf@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:54:44',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA012',
                'firstName' => 'Darlene',
                'middleName' => 'D.',
                'lastName' => 'Kenyon',
                'gender' => 'Female',
                'contactNo' => '3547896580',
                'email' => 'darlene@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:57:04',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA013',
                'firstName' => 'Joseph',
                'middleName' => 'H.',
                'lastName' => 'Peterson',
                'gender' => 'Male',
                'contactNo' => '4587450010',
                'email' => 'joseph@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 14:57:51',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
            [
                'regNo' => 'CA014',
                'firstName' => 'Liam',
                'middleName' => 'K.',
                'lastName' => 'Moore',
                'gender' => 'Male',
                'contactNo' => '7854441014',
                'email' => 'liamoore@mail.com',
                'password' => Hash::make('password123'),
                'regDate' => '2022-04-03 15:00:04',
                'updationDate' => '2024-08-27 07:11:31',
                'passUpdateDate' => now(),
            ],
        ]);
    }
}
