<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new User;
        $s->name = 'Administrator';
        $s->email = 'admin@gmail.com';
        $s->password = bcrypt('admin');
        $s->save();
    }
}
