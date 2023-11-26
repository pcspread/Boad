<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'author_id' => 1,
                'genre_id' => 1,
                'title' => 'ケンタの冒険',
                'content' => 'ケンタが壮大な世界へ旅に出かけるストーリーです。ケンタの成長にこうご期待。',
            ],
            [
                'author_id' => 2,
                'genre_id' => 1,
                'title' => 'サンタ、旅に出る',
                'content' => '皆に夢と希望を届けるサンタさんの物語です。普段は雪の国で仕事を行うサンタさんの冒険をお楽しみください。',
            ],
            [
                'author_id' => 3,
                'genre_id' => 1,
                'title' => '猫旅レポート',
                'content' => '普段から、家の中でゆったりとしていた猫が、ひょんなことから冒険にでることに。果たしてどんな旅が待ち構えているのか。',
            ],
            [
                'author_id' => 1,
                'genre_id' => 1,
                'title' => 'ゴンタの大冒険',
                'content' => 'ゴンタが壮大な世界へ旅に出かけるストーリーです。ゴンタの成長にこうご期待。',
            ],
            [
                'author_id' => 1,
                'genre_id' => 1,
                'title' => '旅度旅',
                'content' => '壮大な旅に出ていたケンタが再び旅に出ることに。今回はどんな冒険が待ち構えているのか。',
            ],

        ]);
    }
}
