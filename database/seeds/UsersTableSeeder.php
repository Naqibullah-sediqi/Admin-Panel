<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();

       DB::table('role_user')->truncate();
       $adminRole =  Role::where('name','admin')->first();
       $authorRole = Role::where('name','author')->first();
       $userRole =   Role::where('name','user')->first();

       $admin = User::create([
       	'name' => 'admin',
       	'email'=> 'sediqi.naqibullah@gmail.com',
       	'password'=>bcrypt('admin')
       ]);


       $user = User::create([
       	'name'=>'user',
       	'email'=>'sediqi.naqibullah2@gmail.com',
       	'password'=>bcrypt('user')
       ]);



       $author = User::create([
       	'name'=>'author',
       	'email'=>'sediqi.naqibullah3@gmail.com',
       	'password'=>bcrypt('author')
       ]);

       $admin->roles()->attach($adminRole);
       $user->roles()->attach($userRole);
       $author->roles()->attach($authorRole);

       // factory(App\User::class,9)->create();


    }
}
