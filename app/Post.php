<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug'
    ];

    static public function createSlug($arg) {
        $periodicSlug = Str::of($arg)->slug('-');
        $slug = $periodicSlug;
        $_i = 1;
        while(self::where('slug', $slug)->first()) {
            $slug = "$periodicSlug-$_i";
            $_i++;
        }
        return $slug;
    }
}
