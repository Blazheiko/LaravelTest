<?php

use Illuminate\Database\Seeder;
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
        // $this->call(UsersTableSeeder::class);
        $this->call(DataPost::class);
    }
}
class DataPost extends Seeder
{
    public function run()
    {
      DB::table ('posts')-> delete ();
      Post::create ([
          'title'=> 'first title',
          'content'=> 'first content'
      ]);
      Post::create ([
            'title'=> 'second title',
            'content'=> 'second  content'
      ]);
        Post::create ([
            'title'=> 'third title',
            'content'=> 'third  content'
        ]);

    }
}
