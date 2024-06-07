<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Tian',
            'email' => 'tian@erp.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');

        $purchasing = User::create([
            'name' => 'Zaky',
            'email' => 'zaky@erp.com',
            'password' => bcrypt('12345678'),
        ]);
        $purchasing->assignRole('user');
    }
}
