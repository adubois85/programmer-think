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
                        echo "Uppercase";
                        break;
                    // Lowercase mode
                    case 1:
                        echo "Lowercase";
                        break;
                    // Punctuation mode
                    case 2:
                        echo "Punctuation";
                        break;
                }
            }
        }
    }

}