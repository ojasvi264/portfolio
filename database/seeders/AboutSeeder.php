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
        $model->description = "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor ipsum non velit reprehenderit, molestias culpa!";
        $model->completed_projects = '12';
        $model->ongoing_projects = "2";
        $model->companies = '3';
        $model->experience = '2';
        $model->addMediaFromUrl(asset('backend/images/author-img.jpg'))->preservingOriginal()->toMediaCollection('default');
        $model->save();
        $model->image = $model->getMedia()[0]->getFullUrl();
    }
}
