<?php

function trackingState(){/**
    * Tracker for the current decryption mode
    * 0 = Uppercase
    * 1 = Lowercase
    * 2 = punctuation
    * 
    * Modes should always move from 0->1->2->0->etc.
    */

    $decryptMode = 0;
   
    // preparing the regular expression to filter and set up our numbers
    $pattern  = '/\d+/';
    $subject ='';
    preg_match_all($pattern, $subject, $matches);

    // the regex returns a nested array, so we need to dig into it to get to the values we want
    foreach($matches as $innerArray){
        if(is_array($innerArray)){
            foreach($innerArray as $value){
                switch($decryptMode){
                    // Uppercase mode
                    case 0:
                        if($value % 27 === 0){
                            $decryptMode = 1;
                            break;
                        } else {
                            echo chr(64 + ($value % 27)); 
                        }
                        break;
                    // Lowercase mode
                    case 1:
                        if($value % 27 === 0){
                            $decryptMode = 2;
                            break;
                        } else {
                            echo chr(96 + ($value % 27)); 
                        }
                        break;
                    // Punctuation mode
                    case 2:
                        if($value % 9 === 0){
                            $decryptMode = 0;
                            break;
                        } else {
                            echo "PLACEHOLDER";
                        break;
                }
            }
        }
    }

}