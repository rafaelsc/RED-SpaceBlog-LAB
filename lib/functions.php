<?php 

function sort_post_by_date($a, $b) {
    return ($a['post_date'] - $b['post_date']) * -1;
}

?>