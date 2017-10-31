<?php

/**
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