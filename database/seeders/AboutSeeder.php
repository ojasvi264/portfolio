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
        $model = new About();
        $model->title = "I'm Ojasvi Dev Tamang, a Web Developer";
        $model->description = "I completed my secondary education at Sainik Awasiya Mahavidyalaya-Dharan, where I had the chance to study and collaborate within a team, despite being away from my family. This institution provided a solid foundation for my personal growth.

        Subsequently, I pursued a science major at DAV College-Jawalakhel, where I had a remarkable experience exploring my interest in computer science.
        
        After completing high school, I graduated from Nagarjuna College of IT, affiliated with Tribhuvan University. Throughout my bachelor's degree, I gained valuable hands-on experience through various projects, with standout projects being the Facial Recognition System for attendance tracking and the Event Management System.
        
        Currently employed as a backend developer, I have acquired valuable experience, but I am still eager to further enhance my skills and expand my knowledge.";
        $model->completed_projects = '12';
        $model->ongoing_projects = "2";
        $model->companies = '3';
        $model->experience = '2';
        $model->addMediaFromUrl(asset('backend/images/author-img.jpg'))->preservingOriginal()->toMediaCollection('default');
        $model->addMediaFromUrl(asset('backend/images/OjasviDevTamang.pdf'))->preservingOriginal()->toMediaCollection('cv');
        $model->save();
        $model->image = $model->getMedia()[0]->getFullUrl();
    }
}
