<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\newsArticle;

class todoList extends Model
{
    use HasFactory;
    public function newsArticle(){
        return $this->belongsTo(newsArticle::class, 'user_id');
    }
}