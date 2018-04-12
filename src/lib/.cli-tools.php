<?php


function ask($q) {

    echo $q, ": \n";

    return trim(fgets(STDIN));

}
