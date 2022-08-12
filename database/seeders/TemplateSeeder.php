<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'name' => 'default',
            'slug' => 'default',
            'status' => 'active',
            'description' => 'default'
        ]);

        Template::create([
            'name' => 'default dark',
            'slug' => 'default-dark',
            'status' => 'inactive',
            'description' => 'default dark'
        ]);
    }
}
