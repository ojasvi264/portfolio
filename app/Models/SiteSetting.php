<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'email', 'address', 'phone', 'facebook_link', 'linkedin_link', 'instagram_link', 'twitter_link'];
}
