<?php

$menu="チャーハン";

switch($menu)
{
    case "ラーメン":
        print "500円です。";
        break;

    case"チャーハン":
        print "300円です。";
        break;

    case"餃子":
        print "200円です。";
        break;

        default:
        print "メニューを入力してください。";
        break;

};

?>