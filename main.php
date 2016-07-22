<?php
require_once 'common.php';
require_once "class/News.php";
include 'class/UserData.php';


    function post($x)
    {
        return isset($_POST[$x]) ? $_POST[$x] : null;
    }

    if(empty($_POST))
    {
        die("Incorrect login or password!");
    }


    $model = new UserData();

    $title = post('title');
    $content = post('content');
    $news = new News($title, $content);


    $model->create($news);

    header("location: tpl/news.php");