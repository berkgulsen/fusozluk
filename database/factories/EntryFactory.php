<?php

namespace Database\Factories;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EntryFactory extends Factory
{
    protected $model = Entry::class;
    public function definition()
    {
        return [
            'title_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
            'content' => $this->faker->sentence(100),
            'created_at'=>$this->faker->dateTime($max = 'now')

        ];
    }
}
