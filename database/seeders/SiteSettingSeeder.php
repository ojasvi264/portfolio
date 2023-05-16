<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $model = new SiteSetting();
        $model->name = 'Ojasvi Dev Tamang';
        $model->dob = date('1997-10-05');
        $model->email = 'lalamdorje@gmail.com';
        $model->address = 'Bhaktapur, Nepal';
        $model->phone = '9842070594';
        $model->designation1 = 'Web Developer';
        $model->designation2 = 'PHP Laravel Developer';
        $model->facebook_link = 'https://www.facebook.com/ojasvi.tamang.7';
        $model->linkedin_link = 'https://www.linkedin.com/in/ojasvi-tamang/';
        $model->instagram_link = 'https://www.instagram.com';
        $model->twitter_link = 'https://www.twitter.com';
        $model->description = 'Skilled Software Engineer with hands-on experience building and optimizing web-based applications for diverse industry organizations. Friendly and engaging team player and an enthusiastic learner.

        Keen to learn and excel in the field of computer science and software development. Developed many web applications and passionate in becoming a full stack developer. Eager to gain new skills and experience to develop a carrier in it.';
        $model->addMediaFromUrl(asset('backend/images/profile-img.png'))->preservingOriginal()->toMediaCollection('default');
        $model->save();
        $model->image = $model->getMedia()[0]->getFullUrl();
    }
}
