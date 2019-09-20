<?php

use Purplenex\Vinsent\Book;
use Purplenex\Vinsent\BookList;

require __DIR__ . '/vendor/autoload.php';

$book0 = new Book('3 Hour Work Week', 'Tim Feriss');
$book1 = new Book('Clean Code', 'Robert Martin');
$book2 = new Book('Strive', 'Ariana Huffington');

$books = new BookList;
$books->addBook($book0);
$books->addBook($book1);
$books->addBook($book2);

var_dump($books);