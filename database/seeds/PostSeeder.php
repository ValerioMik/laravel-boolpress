<?php

factory(Post::class, 50) -> make() -> each(function($post) {

    $test = Test::inRandomOrder() -> limit(1) -> first();
    $post -> test() -> associate($test);

    $post -> save();
});

