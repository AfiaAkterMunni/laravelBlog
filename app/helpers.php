<?php

use App\Models\Category;

function getCategories(){
    $categories = Category::all();
    return $categories;
}
