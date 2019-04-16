<?php

use App\Task;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    var $faker ;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
//        factory('App\User', 20)->create();
        factory(App\User::class, 20)->create()->each(function($u) {
            foreach(range(1,rand(1,10)) as $index){
                $u->tasks()->save(factory(App\Task::class)->make());
            }

        });
    }
}
