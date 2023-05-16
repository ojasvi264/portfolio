<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class About extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title', 'description', 'completed_projects', 'ongoing_projects', 'companies', 'experience'];

    public function getImageAttribute(){
        return $this->hasMedia() ? $this->getMedia()[0]->getFullUrl() : asset ('backend/images/author-img.jpg');
    }
    public function getDocumentAttribute(){
        return $this->hasMedia('cv') ? $this->getMedia('cv')[0]->getFullUrl() : asset ('backend/images/OjasviDevTamang.pdf');
    }
}
