<?php

use Illuminate\Database\Seeder;
use App\models\register;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Factory(App\models\register::class, 10)->create();
// $this->call(app\models\register::class, 10)->create();

    }
}
