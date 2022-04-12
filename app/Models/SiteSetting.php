<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SiteSetting extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'designation1', 'designation2', 'designation3', 'description', 'email', 'address', 'phone', 'facebook_link', 'linkedin_link', 'instagram_link', 'twitter_link'];

    public function getImageAttribute(){
        return $this->hasMedia() ? $this->getMedia()[0]->getFullUrl() : asset ('backend/images/profile-img.jpg');
    }
}
