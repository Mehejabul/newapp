<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BasicSetting;
use App\Models\User;
use App\Models\SocialInfo;
use App\Models\ContactInfo;
use Hash;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasicSetting::create([
            'basic_company' => 'Demo Company',
            'basic_title' => 'Company Title',
        ]);

        SocialInfo::create([
            'sm_facebook' => 'facebook.com',
        ]);

        ContactInfo::create([
            'cont_phone1' => '01835478568',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '01547856847',
            'password' => Hash::make('password'),
            'slug' => uniqid(),
        ]);
    }
}
