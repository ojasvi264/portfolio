<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    protected $table = "progresses";
    protected $fillable = ['name', 'percentage', 'status'];

    public function isActive(){
        return Progress::where('status', 1)->orderBy('id', 'desc')->take(5);
    }
}
