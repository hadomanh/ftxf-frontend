<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Ha Do Manh";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('123456');
        $user->save();
    }
}
