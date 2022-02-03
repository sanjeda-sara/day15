<?php
require_once 'vendor/autoload.php';
use  \App\classes\Example;

$example = new Example();
$example->index();


//    ******** 3 major rules for variable: *********
//        -------------------------------------------------
//    1. starts with $ sign
//    2. A-Z, a-z, 0-9, _ ()
//    3. no numbers at the beginning
//
//
//        **** Standard Rules for Variable Naming:
//            -------------------------------------------
//    1. Start with small letter
//    2. Meaningful
//    3. Readable