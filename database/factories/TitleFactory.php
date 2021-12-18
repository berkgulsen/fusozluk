<?php

namespace Database\Factories;
use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TitleFactory extends Factory
{
    protected $model = Title::class;
    public function definition()
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'slug' => str::slug($title),
            'created_at'=>$this->faker->dateTime($max = 'now')

        ];
    }
}
