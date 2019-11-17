<?php 
include("../common/header.php");
require_once('./OverWatch.php');
$overWatch = new OverWatch;


if($_POST['action']){
    switch($_POST['action']){
    case 'submitTodo':
     $test = $overWatch->submitTodo($_POST['todoTitle'],$_POST['position']);
        echo $test;
        break;

        case 'deleteTodo':
        $test = $overWatch->deleteTodo($_POST['id']);
        echo $test;
        break;
    }
}

include("./home.php");
?>

