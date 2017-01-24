<?php

    require 'vendor/autoload.php';
    require 'app/start.php';

    $loader = new Twig_Loader_Filesystem(VIEW_ROOT);

    $page = new Twig_Environment($loader);

    echo $page->render('home.php');
