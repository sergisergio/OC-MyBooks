<?php

// Return all articles
function getBooks() {
    $bdd = new PDO('mysql:host=localhost;dbname=mybooks;charset=utf8', 'mybooks_user', 'secret');
    $books = $bdd->query('select * from book order by book_id desc');
    return $books;
}
