<?php
    session_start();
    $roll = $_SESSION['roll'];
    $branch = $roll[4].$roll[5];

    if($branch == '03' || $branch == '04'){
        $div = '1';
    }else if($branch == '02' || $branch == '06' || $branch = '08'){
        $div = '2';
    }else if($branch == '01' || $branch == '05' || $branch = '23'){
        $div = '3';
    }else if($branch == '07' || $branch == '21' || $branch = '22'){
        $div = '4';
    }

    $_SESSION['div'] = $div;

    if($roll>=190103001 && $roll<=190103086){
        $lab = '1';
    }else if($roll>=190103087 && $roll<=190104067){
        $lab = '2';
    }else if(($roll>=190104068 && $roll<=190104101) || ($roll>=190102001 && $roll<=190102052)){
        $lab = '3';
    }else if(($roll>=190102053 && $roll<=190102092) || ($roll>=190106001 && $roll<=190106046)){
        $lab = '4';
    }else if(($roll>=190106047 && $roll<=190106075) || ($roll>=190108001 && $roll<=190108057)){
        $lab = '5';
    }else if(($roll>=190101001 && $roll<=190101085)){
        $lab = '6';
    }else if(($roll>=190101086 && $roll<=190101101) || ($roll>=190123001 && $roll<=190123064) || ($roll>=190205001 && $roll<=190205005)){
        $lab = '7';
    }else if(($roll>=190205006 && $roll<=190205056) || ($roll>=190107001 && $roll<=190107034)){
        $lab = '8';
    }else if(($roll>=190107035 && $roll<=190107084) || ($roll>=190121001 && $roll<=190121035)){
        $lab = '9';
    }else if(($roll>=190121036 && $roll<=190121060) || ($roll>=190122001 && $roll<=190122057)){
        $lab = '10';
    }

    $_SESSION['lab'] = $lab;

    header('Location: ../fresher/');
?>
