<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }
}
    class UserTableSeeder extends Seeder {

        public function run()
        {
            // DB::table('users')->delete();
    
            User::create([
                'name'=>'abc',
                'email' => 'foo@bar.com',
                'password'=> Hash::make('123'),
                'active'=>'1',
                'user_type'=>'admin',
            ]);
        }
    }

