<?php

function ask($q) {

    echo $q, ": ";

    return trim(fgets(STDIN));

}
