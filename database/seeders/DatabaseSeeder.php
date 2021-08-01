<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        //this is an option if you want to define a custom seed or factory in any table

        // $user = User::factory()->create([
        //     'name' => 'John Doe'
        // ]);

        // then under create() we can pass array with the attributes we want to ovverride 
        // ['user_id' => $user->id] like that :)    

        Post::factory(30)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal', 
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family', 
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'work', 
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'Family Post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ex lacus. Donec eu mauris sodales, lacinia purus a, congue orci. Pellentesque molestie semper neque a rutrum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ex lacus. Donec eu mauris sodales, lacinia purus a, congue orci. Pellentesque molestie semper neque a rutrum. Cras eget hendrerit eros, sed varius metus. Aenean interdum sollicitudin quam, id cursus elit viverra sed. Integer vitae mollis purus. Sed egestas gravida mi, ac posuere augue luctus eu. Integer mollis vitae enim non egestas. In cursus gravida ipsum, ut ultricies ex tristique vitae. Nullam eu sapien in arcu dapibus mattis.',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'Work Post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ex lacus. Donec eu mauris sodales, lacinia purus a, congue orci. Pellentesque molestie semper neque a rutrum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ex lacus. Donec eu mauris sodales, lacinia purus a, congue orci. Pellentesque molestie semper neque a rutrum. Cras eget hendrerit eros, sed varius metus. Aenean interdum sollicitudin quam, id cursus elit viverra sed. Integer vitae mollis purus. Sed egestas gravida mi, ac posuere augue luctus eu. Integer mollis vitae enim non egestas. In cursus gravida ipsum, ut ultricies ex tristique vitae. Nullam eu sapien in arcu dapibus mattis.',
        // ]);

   
    }
}
