<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    class Book
    {
        var $title;
        var $author;
        var $pages;

        function __construct($atitle, $aAuthor, $aPages)
        {
            $this->title = $atitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }
    $book1 = new Book("Harry Potter <br>", "JK Rowling <br>", 500);
    $book2 = new Book("Lord of the Rings <br>", "Tolkien <br>", 700);

    echo $book1->title;
    ?>


</body>

</html>