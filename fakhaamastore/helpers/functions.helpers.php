<?php


function getRatingFromReviews($reviews){
    $rating = 0;
    foreach($reviews as $review){
        $rating += $review->rating;
    }
    return ($rating != 0)?$rating/$reviews->count():1;
}
