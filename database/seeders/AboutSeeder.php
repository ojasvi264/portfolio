<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => "I'm Ojasvi Dev Tamang, a Web Developer",
            'designation' => 'Jr.Laravel Developer',
            'description' => "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor ipsum non velit reprehenderit, molestias culpa!",
            'completed_projects' => '12',
            'ongoing_projects' => '2',
            'companies' => '3',
            'experience' => '2',
        ]);
    }
}
