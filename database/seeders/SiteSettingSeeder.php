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
        $model->name = 'Ojasvi';
        $model->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, excepturi. Distinctio accusantium fugit odit? Fugit ipsam. Sed ac fringilla ex. Nam mauris velit, ac cursus quis, non leo.';
        $model->email = 'lalamdorje@gmail.com';
        $model->address = 'Bhaktapur, Nepal';
        $model->phone = '9842070594';
        $model->facebook_link = 'https://www.facebook.com/ojasvi.tamang.7';
        $model->linkedin_link = 'https://www.linkedin.com/in/ojasvi-tamang/';
        $model->instagram_link = 'https://www.instagram.com';
        $model->twitter_link = 'https://www.twitter.com';
        $model->save();
    }
}
