<?php
    require_once("database.php"); //БД
    require_once("models/articles.php"); //Набор функций для работы с БД

    $link = db_connect();
    $articles = article_get($link, $_GET['id']); //вызываем функцию с articles.php

    include("views/article.php");  
?>
