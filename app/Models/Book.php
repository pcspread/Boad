<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'author_id',
        'genre_id',
        'title',
        'content',
        'memo',
        'rate',
        'comment',
    ];

    /**
     * リレーション設定
     * authors
     * @param void
     * @return object
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * リレーション設定
     * genres
     * @param void
     * @return object
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}