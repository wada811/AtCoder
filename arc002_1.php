<?php
    fscanf(STDIN, "%d", $year);
    if(isLeapYear($year)){
        echo "YES\n";
    }else{
        echo "NO\n";
    }
    
    function isLeapYear($year){
        return checkdate(2, 29, $year);
    }
?>