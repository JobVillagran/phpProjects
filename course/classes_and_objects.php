<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;
        }
        $book1 = new Book;
        $book1->title = "Harry Potter <br>";
        $book1->author = "JK Rowling <br>";
        $book1->pages = 500;

        echo $book1->title;
        echo $book1->author;
        echo $book1->pages;
        
        $book2 = new Book;
        $book1->title = "<br>Lord of the Rings <br>";
        $book1->author = "Tolkien <br>";
        $book1->pages = 700;

        echo $book1->title;
        echo $book1->author;
        echo $book1->pages;
    ?>
    

</body>

</html>