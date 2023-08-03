<?php

namespace App\Models;



class Blog 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Abu Jahal",
            "slug" => "Judul-blog-pertama",
            "author" => "Alfin Zainuri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque sed suscipit. Excepturi voluptatem et perspiciatis, velit dignissimos maiores quas sed neque ipsam id quisquam. Temporibus quaerat ad est libero!",
        ],
        [
            "title" => "Judul Abu Lahab",
            "slug" => "Judul-blog-kedua",
            "author" => "Robby",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque sed suscipit. Excepturi voluptatem et perspiciatis, velit dignissimos maiores quas sed neque ipsam id quisquam. Temporibus quaerat ad est libero!",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $blog = static::all();
        return $blog->firstwhere('slug', $slug);
    }
}