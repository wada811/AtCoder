<?php

    fscanf(STDIN, "%d", $q);
    fscanf(STDIN, "%s", $answer);

    $counts = array(
        preg_match_all('/1/', $answer, $matches),
        preg_match_all('/2/', $answer, $matches),
        preg_match_all('/3/', $answer, $matches),
        preg_match_all('/4/', $answer, $matches)
    );

    echo max($counts).' '.min($counts)."\n";

?>