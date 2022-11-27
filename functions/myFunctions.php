<?php

    function searchObjInArr($array, $id) {
        $index;
        
        if(count($array) <= 1){
            $index = -1;
        }

        for($i = 0; $i< count($array); $i++) {
            if($array[$i]->id == $id) {
                $index = $i;
                break;
            }else {
                $index = -1;
            }
        }
        return $index;
    }