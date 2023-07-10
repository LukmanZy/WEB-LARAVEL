<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $content_post = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judlul-pertama',
            'author' => 'Lukman Hakim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ad deleniti alias quae animi, quisquam fugiat a harum molestiae maxime placeat qui culpa quibusdam unde eos. Culpa corrupti laborum perferendis recusandae neque harum commodi accusantium distinctio non nisi dolor ipsa quidem inventore unde facilis delectus provident nulla reprehenderit, ipsam ut quae alias consequatur eveniet quo. Illum a excepturi animi maiores assumenda, dolorum cumque enim impedit molestias! Cumque animi atque, repellat vel aut quod, placeat ab, sint porro molestias temporibus! Ratione adipisci enim nihil voluptas repudiandae voluptates. Repellendus molestiae omnis dignissimos, ipsam blanditiis sequi rem dolor quae autem quos at provident sed vitae sapiente porro expedita. Quo vero natus dolorem dolore ea cumque sit, animi quam veritatis explicabo, molestiae nemo iste expedita nesciunt praesentium, tempora modi unde? Quo neque tenetur debitis aspernatur iure cupiditate aliquid porro accusantium nulla reiciendis nobis, temporibus ad culpa, minus quia recusandae, similique provident repudiandae corporis exercitationem laboriosam hic dolorum sunt nostrum. Ipsam corporis vitae voluptate fugiat inventore eaque laboriosam a tempora est sunt, ullam nesciunt deleniti? Nisi delectus, facilis culpa laborum quam aperiam deleniti! Tempore, numquam temporibus placeat vitae deleniti rerum quae quos inventore corporis consequuntur iusto impedit est dolorum eum. Similique exercitationem soluta inventore ipsum.'
        ], [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Ucup',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, autem officia ullam voluptate pariatur eaque cumque quasi dolorum quisquam quas, mollitia illo vero architecto, vitae suscipit dignissimos qui expedita totam!, ipsam ut quae alias consequatur eveniet quo. Illum a excepturi animi maiores assumenda, dolorum cumque enim impedit molestias! Cumque animi atque, repellat vel aut quod, placeat ab, sint porro molestias temporibus! Ratione adipisci enim nihil voluptas repudiandae voluptates. Repellendus molestiae omnis dignissimos, ipsam blanditiis sequi rem dolor quae autem quos at provident sed vitae sapiente porro expedita. Quo vero natus dolorem dolore ea cumque sit, animi quam veritatis explicabo, molestiae nemo iste expedita nesciunt praesentium, tempora modi unde? Quo neque tenetur debitis aspernatur iure cupiditate aliquid porro accusantium nulla reiciendis nobis, temporibus ad culpa, minus quia recusandae, similique provident repudiandae corporis exercitationem laboriosam hic dolorum sunt nostrum. Ipsam corporis vitae voluptate fugiat inventore eaque laboriosam a tempora est sunt, ullam nesciunt deleniti? Nisi delectus, facilis culpa laborum quam aperiam deleniti! Tempore, numquam temporibus placeat vitae deleniti rerum quae quos inventore corporis consequuntur iusto impedit est dolorum eum. Similique exercitationem soluta inventore ipsum.'
        ]
    ];

    public static function all() {
        return collect(self::$content_post); // => karena static jadi panggilnya self, kalo properti biasa pakai this =>
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);

    }
}
