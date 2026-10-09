<?php

function getAuthors()
{
    $authors = [
        [
            "id" => 1,
            "name" => "Andrea Hirata",
            "total_books" => 1,
            "bio" => "Penulis novel."
        ],
        [
            "id" => 2,
            "name" => "Tere Liye",
            "total_books" => 1,
            "bio" => "Penulis novel Indonesia."
        ],
        [
            "id" => 3,
            "name" => "J.K. Rowling",
            "total_books" => 1,
            "bio" => "Penulis seri Harry Potter."
        ],
        [
            "id" => 4,
            "name" => "Pramoedya Ananta Toer",
            "total_books" => 2,
            "bio" => "Penulis sastra Indonesia."
        ],
        [
            "id" => 5,
            "name" => "Sapardi Djoko Damono",
            "total_books" => 1,
            "bio" => "Penyair Indonesia."
        ],
    ];

    return $authors;
}

function getAuthor()
{
    $authors = getAuthors();

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;

    foreach ($authors as $author) {
        if ($author['id'] === $id) {
            return $author;
        }
    }

    return $authors[0];
}
?>




