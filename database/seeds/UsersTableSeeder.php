<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make() return 'collection'
        $users = factory(User::class)->times(50)->make();
        // the parameter of insert() must be array.
        // So using toArray() to convery the 'collection'
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'RLG';
        $user->email = 'test@testblog.com';
        $user->password = bcrypt('password');
        $user->is_admin = true;
        $user->save();
    }
}
