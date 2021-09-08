<?php

use Illuminate\Database\Seeder;
use App\ModelsGraduationPhotos\EventType;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            'Mi foto de graduacion'
        ];
        foreach ($events as $key => $event) {
            EventType::create([ 'name' => $event ]);
        }
    }
}
