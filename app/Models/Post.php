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

    public function scopeFilter($query, array $filters) {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like','%'.$filters['search'].'%')
        //                 ->orWhere('body', 'like','%'.$filters['search'].'%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%'.$search.'%')
                            ->orWhere('body', 'like', '%'.$search.'%');
        });

        /**
         * whereHas() dimana function untuk join table
         */

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }
}
