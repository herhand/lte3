
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
        // $this->call(UsersTableSeeder::class);
        User::create([
            "name" => "admin",
            "email" => "admin@admin.com",
            "user_accessed" =>"administrator",
            "password" => Hash::make('admin')
        ]);
    }
}
