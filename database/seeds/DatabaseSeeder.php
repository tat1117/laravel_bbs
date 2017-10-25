<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Message;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

        $this->call('MessagesTableSeeder');

        Model::reguard();
    }
}

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->delete();

        $faker = Faker::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            Message::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'created_at' => Carbon::today()
            ]);
        }
    }

}
