<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->remember_token = str_random(10);
        $user->save();

        factory(App\User::class, 2)->create()->each(function($u){
            $u->contents()->save(factory(App\Content::class)->make());
        });
    }
}
