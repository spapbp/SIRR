<?php
    //session_start();
    function increment(){
        $_SESSION['count']++;
    }

    function setToZero(){
        //$_SESSION['count'] = 0;
    }

    $content = array(
        "1" => array("Question", "Answer1", "Answer2", "Answer3", "Answer4", "2"),
        "2" => array("Question", "Answer1", "Answer2", "Answer3", "Answer4", "2"),
        "3" => array("Question", "Answer1", "Answer2", "Answer3", "Answer4", "2"),
        "4" => array("Question", "Answer1", "Answer2", "Answer3", "Answer4", "2"),
    );