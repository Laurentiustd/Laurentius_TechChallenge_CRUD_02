<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Staff = [
            [ 
            'name' => 'Budi Raffa',
            'age' => '2000-11-12',
            'address' => 'Jl Kemanggisan Utara 2 No.20',
            'number' => '08123987654',
            'position' => 'CTO'
            ],
            [ 
            'name' => 'Adiwangsa',
            'age' => '2003-01-19',
            'address' => 'Jl Kemanggisan Selatan 1 No.30',
            'number' => '0815912345',
            'position' => 'CMO'
            ],
            [ 
            'name' => 'Ardiyanto ',
            'age' => '2001-08-05',
            'address' => 'Jl Kemanggisan Timur 4 No.10',
            'number' => '0896123456',
            'position' => 'COO'
            ],
            [ 
            'name' => 'Amanda ',
            'age' => '2002-03-24',
            'address' => 'Jl Kemanggisan Selatan 5 No.40',
            'number' => '08712345678',
            'position' => 'CFO'
            ],
            [
            'name' => 'Raihan Kurniawan',
            'age' => '1997-03-23',
            'address' => 'Jl Kemanggisan Barat 3 No.50',
            'number' => '08987612345',
            'position' => 'CEO'
            ]
        ];

        foreach($Staff as $item){
            staff::create($item);
        }
    }
}
