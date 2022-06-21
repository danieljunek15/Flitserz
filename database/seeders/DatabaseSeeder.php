<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment('local')) {
            $password = Str::random(8);
            User::factory()
                ->create([
                    'name' => 'Daniel',
                    'email' => 'danieljunek96@gmail.com',
                    'password' => bcrypt($password)
                ]);
            $this->command->info("Password : $password");
        }

        if (app()->environment('production')) {
            $password = Str::random(32);
            User::factory()
                ->create([
                    'name' => 'Daniel',
                    'email' => 'danieljunek96@gmail.com',
                    'password' => bcrypt($password)
                ]);
            $this->command->info("Password : $password Sla dit goed op");
        }
    }
}
