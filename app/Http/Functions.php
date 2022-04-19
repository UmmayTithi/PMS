<?php

use App\Models\Category;

function categories(){
    return Category::latest()->get();
}
