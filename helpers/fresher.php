<?php
    session_start();
    $roll = $_SESSION['roll'];

    if(($roll>=190101001 && $roll<=190101101) || ($roll>=190123001 && $roll<=190123064) || ($roll>=190205001 && $roll<=190205056)){
        $div = '3';
    }else if(($roll>=190107001 && $roll<=190107084) || ($roll>=190121001 && $roll<=190121060) || ($roll>=190122001 && $roll<=190122057)){
        $div = '4';
    }else if(($roll>=190103001 && $roll<=190104101)){
        $div = '1';
    }else if(($roll>=190102001 && $roll<=190102092) || ($roll>=190108001 && $roll<=190108057)  || ($roll>=190106001 && $roll<=190106075)){
        $div = '2';
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

    if($roll>=190101001 && $roll<=1901031045){
        $tut = '1';
    }else if($roll>=190101046 && $roll<=190101090){
        $tut = '2';
    }else if($roll>=190101091 && $roll<=190102034){
        $tut = '3';
    }else if($roll>=190102035 && $roll<=190102079){
        $tut = '4';
    }else if($roll>=190102080 && $roll<=190103032){
        $tut = '5';
    }else if($roll>=190103033 && $roll<=190103077){
        $tut = '6';
    }else if($roll>=190103078 && $roll<=190104017){
        $tut = '7';
    }else if($roll>=190104018 && $roll<=190104062){
        $tut = '8';
    }else if(($roll>=190104063 && $roll<=190104101) || ($roll>=190106001 && $roll<=190106006)){
        $tut = '9';
    }else if($roll>=190106007 && $roll<=190106051){
        $tut = '10';
    }else if($roll>=190106052 && $roll<=190107021){
        $tut = '11';
    }else if($roll>=190107022 && $roll<=190107066){
        $tut = '12';
    }else if($roll>=190107067 && $roll<=190108027){
        $tut = '13';
    }else if(($roll>=190108028 && $roll<=190108057) || ($roll>=190121001 && $roll<=190121015)){
        $tut = '14';
    }else if($roll>=190121016 && $roll<=190121060){
        $tut = '15';
    }else if(($roll>=190122001 && $roll<=190122045)){
        $tut = '16';
    }else if($roll>=190122046 && $roll<=190123033){
        $tut = '17';
    }else if(($roll>=190123034 && $roll<=190123064) || ($roll>=190205001 && $roll<=190205014)){
        $tut = '18';
    }else if($roll>=190205015 && $roll<=190205056){
        $tut = '19';
    }

    $_SESSION['tut'] = $tut;

    header('Location: ../fresher/');
?>
