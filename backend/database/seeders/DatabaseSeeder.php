<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\User;
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

        $user = User::create([
          'name' => 'João Ribeiro',
          "password" => "$2y$10\$YGH872/29tpvNN7QIyk7s.mnhrycaSmGr3x4U7AoMdEzI.CBH7YA6",
          "email" => "jvitorfr@outlook.com"
        ]
      );

      Owner::create([
         'user_id' => $user->id,
        ]
      );
    }
}
