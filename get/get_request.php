<?php

    $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
    if(!$category ) {
        $category = 1;
    }
    if(!$limit) {
        $limit = 1;
    }
    echo "Category: $category | Limit: $limit";
    // $products = [
    //     'computer' => ['keyboards', 'mouses', 'computers', 'laptops'],
    //     'house' => ['utensils', 'forks','knifes','spoons','microwaves'],
    //     'food' => ['coffee', 'rice', 'beans']
    // ];

    
?>