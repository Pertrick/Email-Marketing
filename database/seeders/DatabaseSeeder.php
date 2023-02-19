<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker;
use App\Models\Subscriber;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Subscriber::create([
            'name' => 'Patrick Udoh',
            'email' => 'udohpertrick@gmail.com',
            'company' => 'Patrick and Sons LTD',
            'organization' => 'Patrick Limited',
            'phone' =>  Str::random(11),
            'country' => '5'
        ]);

        Subscriber::create([
            'name' => 'Francis Udoh',
            'email' => 'francis@gmail.com',
            'company' => 'francis and Sons LTD',
            'organization' => 'francis Limited',
            'phone' =>  Str::random(11),
            'country' => '6'
        ]);



    }
}
