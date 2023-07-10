<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Lukman Hakim',
        //     'email' => 'hlukman6969@gmail.com',
        //     'password' => bcrypt('rahasia')
        // ]);

        // User::create([
        //     'name' => 'Ucup',
        //     'email' => 'surucup@gmail.com',
        //     'password' => bcrypt('rahasia')
        // ]);

        // User::factory(4)->create();

        // Category::create([
        //     'name' => 'Programing',
        //     'slug' => 'programing'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'           
        // ]);

        // Category::create([
        //     'name' => 'Landscape',
        //     'slug' => 'landscape'
        // ]);

        Post::factory(7)->create();

        // Post::create([
        //     'title' => 'Judul Pertama Programing',
        //     'slug' => 'judul-pertama-programing',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab quod omnis optio a. Ratione reprehenderit laboriosam accusantium sit voluptas!</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi totam fuga aliquam explicabo praesentium minus quis, ratione ipsam laudantium possimus recusandae adipisci facilis voluptatibus debitis aliquid vero quam. Esse quod rem sit unde veritatis temporibus hic ullam quae et, nulla explicabo eligendi impedit autem corporis beatae aperiam iure at amet voluptate sequi architecto, fugiat id repellendus nisi! Assumenda beatae vitae veniam, eaque labore culpa possimus. Aliquam alias expedita consequatur voluptates! Doloremque, hic architecto consequuntur libero at suscipit dignissimos itaque aliquid fugiat officia dicta repellendus maiores! Possimus, qui recusandae aperiam corrupti ducimus quaerat doloremque aut architecto quis quibusdam ab debitis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nostrum consectetur sit mollitia magnam aspernatur nemo esse enim odit fugit animi dolorum, voluptas facilis sunt? Dolore laudantium, doloremque facilis beatae asperiores iure quasi quis harum temporibus quos dicta porro cupiditate ea saepe eligendi corrupti esse voluptas in maiores earum consequuntur eveniet enim. Quis quasi excepturi beatae cumque eius sed nam mollitia amet molestias consequatur quas ipsam, eaque inventore. Facilis quam possimus eaque, quod iusto quia ipsa officiis quos minima distinctio ipsum maxime. Voluptatem vitae iusto nemo fuga assumenda nam explicabo impedit, repudiandae ipsum, placeat eveniet, harum eum et ex.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate et, tempora enim id ipsum vitae numquam excepturi. Ipsum culpa cumque qui consectetur, eligendi dolor, vitae officia reprehenderit consequatur quia excepturi labore iusto ratione illo similique omnis maiores, asperiores id ea incidunt? Sed non at ea amet iste officiis voluptatibus.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab quod omnis optio a. Ratione reprehenderit laboriosam accusantium sit voluptas!</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi totam fuga aliquam explicabo praesentium minus quis, ratione ipsam laudantium possimus recusandae adipisci facilis voluptatibus debitis aliquid vero quam. Esse quod rem sit unde veritatis temporibus hic ullam quae et, nulla explicabo eligendi impedit autem corporis beatae aperiam iure at amet voluptate sequi architecto, fugiat id repellendus nisi! Assumenda beatae vitae veniam, eaque labore culpa possimus. Aliquam alias expedita consequatur voluptates! Doloremque, hic architecto consequuntur libero at suscipit dignissimos itaque aliquid fugiat officia dicta repellendus maiores! Possimus, qui recusandae aperiam corrupti ducimus quaerat doloremque aut architecto quis quibusdam ab debitis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nostrum consectetur sit mollitia magnam aspernatur nemo esse enim odit fugit animi dolorum, voluptas facilis sunt? Dolore laudantium, doloremque facilis beatae asperiores iure quasi quis harum temporibus quos dicta porro cupiditate ea saepe eligendi corrupti esse voluptas in maiores earum consequuntur eveniet enim. Quis quasi excepturi beatae cumque eius sed nam mollitia amet molestias consequatur quas ipsam, eaque inventore. Facilis quam possimus eaque, quod iusto quia ipsa officiis quos minima distinctio ipsum maxime. Voluptatem vitae iusto nemo fuga assumenda nam explicabo impedit, repudiandae ipsum, placeat eveniet, harum eum et ex.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate et, tempora enim id ipsum vitae numquam excepturi. Ipsum culpa cumque qui consectetur, eligendi dolor, vitae officia reprehenderit consequatur quia excepturi labore iusto ratione illo similique omnis maiores, asperiores id ea incidunt? Sed non at ea amet iste officiis voluptatibus.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab quod omnis optio a. Ratione reprehenderit laboriosam accusantium sit voluptas!</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi totam fuga aliquam explicabo praesentium minus quis, ratione ipsam laudantium possimus recusandae adipisci facilis voluptatibus debitis aliquid vero quam. Esse quod rem sit unde veritatis temporibus hic ullam quae et, nulla explicabo eligendi impedit autem corporis beatae aperiam iure at amet voluptate sequi architecto, fugiat id repellendus nisi! Assumenda beatae vitae veniam, eaque labore culpa possimus. Aliquam alias expedita consequatur voluptates! Doloremque, hic architecto consequuntur libero at suscipit dignissimos itaque aliquid fugiat officia dicta repellendus maiores! Possimus, qui recusandae aperiam corrupti ducimus quaerat doloremque aut architecto quis quibusdam ab debitis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nostrum consectetur sit mollitia magnam aspernatur nemo esse enim odit fugit animi dolorum, voluptas facilis sunt? Dolore laudantium, doloremque facilis beatae asperiores iure quasi quis harum temporibus quos dicta porro cupiditate ea saepe eligendi corrupti esse voluptas in maiores earum consequuntur eveniet enim. Quis quasi excepturi beatae cumque eius sed nam mollitia amet molestias consequatur quas ipsam, eaque inventore. Facilis quam possimus eaque, quod iusto quia ipsa officiis quos minima distinctio ipsum maxime. Voluptatem vitae iusto nemo fuga assumenda nam explicabo impedit, repudiandae ipsum, placeat eveniet, harum eum et ex.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate et, tempora enim id ipsum vitae numquam excepturi. Ipsum culpa cumque qui consectetur, eligendi dolor, vitae officia reprehenderit consequatur quia excepturi labore iusto ratione illo similique omnis maiores, asperiores id ea incidunt? Sed non at ea amet iste officiis voluptatibus.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul KeEmpat',
        //     'slug' => 'judul-ke-empat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab quod omnis optio a. Ratione reprehenderit laboriosam accusantium sit voluptas!</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quasi totam fuga aliquam explicabo praesentium minus quis, ratione ipsam laudantium possimus recusandae adipisci facilis voluptatibus debitis aliquid vero quam. Esse quod rem sit unde veritatis temporibus hic ullam quae et, nulla explicabo eligendi impedit autem corporis beatae aperiam iure at amet voluptate sequi architecto, fugiat id repellendus nisi! Assumenda beatae vitae veniam, eaque labore culpa possimus. Aliquam alias expedita consequatur voluptates! Doloremque, hic architecto consequuntur libero at suscipit dignissimos itaque aliquid fugiat officia dicta repellendus maiores! Possimus, qui recusandae aperiam corrupti ducimus quaerat doloremque aut architecto quis quibusdam ab debitis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nostrum consectetur sit mollitia magnam aspernatur nemo esse enim odit fugit animi dolorum, voluptas facilis sunt? Dolore laudantium, doloremque facilis beatae asperiores iure quasi quis harum temporibus quos dicta porro cupiditate ea saepe eligendi corrupti esse voluptas in maiores earum consequuntur eveniet enim. Quis quasi excepturi beatae cumque eius sed nam mollitia amet molestias consequatur quas ipsam, eaque inventore. Facilis quam possimus eaque, quod iusto quia ipsa officiis quos minima distinctio ipsum maxime. Voluptatem vitae iusto nemo fuga assumenda nam explicabo impedit, repudiandae ipsum, placeat eveniet, harum eum et ex.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptate et, tempora enim id ipsum vitae numquam excepturi. Ipsum culpa cumque qui consectetur, eligendi dolor, vitae officia reprehenderit consequatur quia excepturi labore iusto ratione illo similique omnis maiores, asperiores id ea incidunt? Sed non at ea amet iste officiis voluptatibus.</p>'
        // ]);
    }
}
