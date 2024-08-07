<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $role = Role::firstOrCreate([
            'title' => 'admin'
        ]);

        $user = [
            'name' => 'vlad',
            'email' => 'vlad@gmail.com',
            'password' => Hash::make(123123123),
        ];

        $user = User::firstOrCreate(
            [
                'email' => $user['email']
            ],
            [
                'name' => $user['name'],
                'password' => $user['password'],
            ]
        );
        $user->roles()->sync([$role->id]);

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
