<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\todoList;

class newsArticle extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];
    public function todoLists() {
        return $this->hasMany(todoList::class);
    }
}