<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Model\Task::truncate();
        factory(App\Model\Task::class, 20)->create();
    }
}
