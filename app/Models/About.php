<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'designation', 'description', 'completed_projects', 'ongoing_projects', 'companies', 'experience'];
}
