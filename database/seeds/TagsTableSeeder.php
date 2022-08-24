<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ["tecnologia", "cucina", "attualità", "storia", "politica"];
        foreach($tags as $tag) {
            Tag::create([
                "name" => $tag,
                "slug" => Str::slug($tag)
            ]);
        }
    }
}
