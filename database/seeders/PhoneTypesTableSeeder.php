<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhoneType;

class PhoneTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $phoneTypes = [
        ['name' => 'Home'],
        ['name' => 'Work'],
        ['name' => 'Cellular'],
        ['name' => 'Other'],
      ];

      PhoneType::insert($phoneTypes);
    }
}
