<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'content' => fake()->realText(),
            'excerpt' => fake()->sentence(),
            'slug' => fake()->slug(),
            'created_by' => User::factory(),
        ];
    }
}
