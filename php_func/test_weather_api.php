<?php

function get_page($rows){
                
    $divide = $rows/12;
    $int = (int)$divide;
    $decimal = $divide - $int;
    $final = 0;
    if($decimal > 0){
        $final = $int + 1;
    }

    return $final;
}

echo get_page(58);

?> 