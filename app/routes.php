<?php

// Home page
$app->get('/', function () use ($app) {
    $books = $app['dao.book']->findAll();
    return $app['twig']->render('index.html.twig', array('books' => $books));
})->bind('home');

// Article details with comments
$app->get('/book/{id}', function ($id) use ($app) {
    $book = $app['dao.book']->find($id);
    return $app['twig']->render('book.html.twig', array('book' => $book));
})->bind('book');
