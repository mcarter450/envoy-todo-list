<?php

use Illuminate\Database\Seeder;
use App\User;

class TasksTableSeeder extends Seeder
{
    /**
     * Array of home related tasks to be inserted
     *
     * @var array
     */
    protected $tasks = [
        [
            'title' => 'Take out trash',
            'description' => 'Move black, blue and green bins onto street'
        ],
        [
            'title' => 'Seed front lawn',
            'description' => 'Buy lawn seed, disperse, and aerate the soil'
        ],
        [
            'title' => 'Replace roof',
            'description' => 'Get bids and select most reliable and affordable contractor'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        // Loop through $tasks array
        foreach ($this->tasks as $task) {
            $user->tasks()->create([
                'title' => $task['title'],
                'description' => $task['description']
            ]);
        }
    }
}
