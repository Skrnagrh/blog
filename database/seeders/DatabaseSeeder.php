<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Sukron Anugrah',
            'username' => 'Sukron',
            'email' => 'sukron@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        // User::create([
        //     'name' => 'Kacung',
        //     'email' => 'kacung@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::Factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judlu-prtama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, deserunt. Provident, modi id! Dolores mollitia ratione, magni vel odio quaerat debitis quod voluptatem ipsum illum similique repellendus nemo corporis autem!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus magni maxime asperiores, nihil deleniti, ex sit, ratione dolor aut sequi ea consequatur quas corrupti vitae officia necessitatibus voluptatibus in deserunt! Dolores magnam similique corrupti aliquam sequi, vero ad exercitationem! Sit omnis doloremque fuga impedit quisquam cum voluptate, consectetur itaque rerum deserunt possimus, praesentium ducimus aperiam sunt aliquam magnam nobis, voluptatem cupiditate reiciendis eius voluptas incidunt labore earum. Debitis aperiam officia provident eius dolorem, est odio quam doloremque inventore esse earum placeat pariatur dolore omnis. Quod non error nihil perspiciatis commodi autem necessitatibus laudantium ut nesciunt dolorem provident, dolores ea cupiditate nemo quibusdam, eligendi ad deleniti! Magni labore reprehenderit obcaecati recusandae amet veritatis aut possimus eos a inventore, et alias neque mollitia aspernatur aliquam iusto esse nulla laborum! Ad quam magni dolorem. Laborum, recusandae dolores! Rerum, nihil fugit. Esse impedit reiciendis maxime laudantium eum exercitationem vero nisi labore, obcaecati libero?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judlu-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, deserunt. Provident, modi id! Dolores mollitia ratione, magni vel odio quaerat debitis quod voluptatem ipsum illum similique repellendus nemo corporis autem!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus magni maxime asperiores, nihil deleniti, ex sit, ratione dolor aut sequi ea consequatur quas corrupti vitae officia necessitatibus voluptatibus in deserunt! Dolores magnam similique corrupti aliquam sequi, vero ad exercitationem! Sit omnis doloremque fuga impedit quisquam cum voluptate, consectetur itaque rerum deserunt possimus, praesentium ducimus aperiam sunt aliquam magnam nobis, voluptatem cupiditate reiciendis eius voluptas incidunt labore earum. Debitis aperiam officia provident eius dolorem, est odio quam doloremque inventore esse earum placeat pariatur dolore omnis. Quod non error nihil perspiciatis commodi autem necessitatibus laudantium ut nesciunt dolorem provident, dolores ea cupiditate nemo quibusdam, eligendi ad deleniti! Magni labore reprehenderit obcaecati recusandae amet veritatis aut possimus eos a inventore, et alias neque mollitia aspernatur aliquam iusto esse nulla laborum! Ad quam magni dolorem. Laborum, recusandae dolores! Rerum, nihil fugit. Esse impedit reiciendis maxime laudantium eum exercitationem vero nisi labore, obcaecati libero?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judlu-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, deserunt. Provident, modi id! Dolores mollitia ratione, magni vel odio quaerat debitis quod voluptatem ipsum illum similique repellendus nemo corporis autem!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloribus magni maxime asperiores, nihil deleniti, ex sit, ratione dolor aut sequi ea consequatur quas corrupti vitae officia necessitatibus voluptatibus in deserunt! Dolores magnam similique corrupti aliquam sequi, vero ad exercitationem! Sit omnis doloremque fuga impedit quisquam cum voluptate, consectetur itaque rerum deserunt possimus, praesentium ducimus aperiam sunt aliquam magnam nobis, voluptatem cupiditate reiciendis eius voluptas incidunt labore earum. Debitis aperiam officia provident eius dolorem, est odio quam doloremque inventore esse earum placeat pariatur dolore omnis. Quod non error nihil perspiciatis commodi autem necessitatibus laudantium ut nesciunt dolorem provident, dolores ea cupiditate nemo quibusdam, eligendi ad deleniti! Magni labore reprehenderit obcaecati recusandae amet veritatis aut possimus eos a inventore, et alias neque mollitia aspernatur aliquam iusto esse nulla laborum! Ad quam magni dolorem. Laborum, recusandae dolores! Rerum, nihil fugit. Esse impedit reiciendis maxime laudantium eum exercitationem vero nisi labore, obcaecati libero?',
        //     'category_id' => 3,
        //     'user_id' => 2,
        // ]);
    }
}

