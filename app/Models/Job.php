<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

      protected $fillable = ['user_id', 'category_id', 'title','description','type','location','salary_range','requirements','approved','image'];
}
