<?php

namespace Database\Seeders;

use App\Models\Modelbackend\ContactInfo;
use App\Models\Modelbackend\ContactUs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);

        ContactInfo::create([
            'email' => 'example@gmail.com',
            'phone' => '12345678910',
            'ar_address' => 'العنوان',
        ]);
    }
}
