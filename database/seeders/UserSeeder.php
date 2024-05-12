<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {

  $users = [
   [
    'name' => 'Darragh',
    'email' => 'darragh@gmail.com',
    'password' => '123!"£qweQWE',
    'access_level' => '1'
   ],
   [
    'name' => 'Admin',
    'email' => 'admin@gmail.com',
    'password' => '123!"£qweQWE',
    'access_level' => '2'
   ],

  ];



  foreach ($users as $user) {
   User::create([
    'name' =>
    $user['name'],
    'email' =>
    $user['email'],
    'password' => Hash::make($user['password'],),
    'access_level' =>
    $user['access_level'], // 
   ]);
  }
 }
}
