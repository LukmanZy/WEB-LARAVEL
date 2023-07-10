<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded =['id'];
    protected $with = ['author', 'category'];

    /**
     * function category() merelasikan table Post dengan table Category
     * dengan catatan nama function nya harus sama dengan nama class nya
     *
     * jadi satu Postingan yang ada di model post memiliki satu kategory
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
