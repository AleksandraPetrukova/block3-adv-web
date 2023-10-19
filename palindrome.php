<?php

//teacher solution
    $phraseToTest = "ad   a...";


    //VER 1
    //have 2 var to keep track of phrase forward and backward
    $forwards = "";
    $backwards = "";

    //populate my 2 vars - use a loop
    // check for spaces skip them
    for ($i = 0; $i < strlen($phraseToTest); $i++) {
        // echo $phraseToTest[$i];
        //(!($phraseToTest[$i] == " " || $phraseToTest[$i] == "."))
        if ($phraseToTest[$i] != " " && $phraseToTest[$i] != ".") {
            $forwards .= $phraseToTest[$i];
        }
    }
    // echo $forwards;

    for ($i = strlen($phraseToTest) - 1; $i >= 0; $i--) {
        if ($phraseToTest[$i] != " " && $phraseToTest[$i] != ".") {
            $backwards .= $phraseToTest[$i];
        }
    }
    // compare the 2 vars
    if ($forwards == $backwards) {
        echo "It is a palindrome";
    } else {
        // echo "It is not a palindrome";
    }

    //ver 2
    //compare front - back
    //keep track
    // $iFront = 0;
    

    for ($i = 0, $backIndex = strlen($phraseToTest) - 1; 
            $i < strlen($phraseToTest); 
            $i++, $backIndex--) {
        if ($i > $backIndex) {
            echo "It is a palindrome";
            break;
        }
        while ($phraseToTest[$i] == " " || $phraseToTest[$i] == ".") {
            $i++;
        }
        while ($phraseToTest[$backIndex] == " " || $phraseToTest[$backIndex] == ".") {
            $backIndex--;
        }
        if ($phraseToTest[$i] != $phraseToTest[$backIndex]) {
            echo "It is not a palindrome";
            break;
        }
    }

    //assignment
    //read php oop section 1 and 2 https://www.phptutorial.net/php-oop/
?>