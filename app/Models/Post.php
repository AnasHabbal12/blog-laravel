<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'slug', 'image_path', 'user_id'
    ];

    public function user() { //method -> in this case it,s called propertey
        return $this -> belongsTo(User::class);
    }
}
