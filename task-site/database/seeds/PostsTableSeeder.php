<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->delete();

        foreach (range(1, 100) as $i) {
            factory(App\Post::class)->create([
            'user_id' => User::find(rand(1, 5))->id,
        ]);
        }



    }
}
