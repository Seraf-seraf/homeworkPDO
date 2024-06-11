<?php

namespace NotesApp\Model;

use NotesApp\Database\Database;

class Post extends Model
{
    public static array $fillable = [
        'title',
        'note'
    ];
    protected static $table = 'post';

    public function __construct()
    {
        static::$db = Database::getInstance()->db;
    }

}