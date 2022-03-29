<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    //GETTER
    //private access = only the class that has it, can access to it.
    /*class Movie
    {
        public $title;
        private $rating; //so the rating can't be modify

        function __construct($aTitle, $aRating)
        {
            $this->title = $aTitle;
            $this->rating = $aRating;
        }
        function getRating(){ //Getters that connect with private 
            return $this->rating;
        }

    }
    $avengers = new Movie("Avengers", "PG-13");
    
    echo $avengers->getRating(); //declare the getRating method to get the rating
    */

    //SETTER
    //private access = only the class that has it, can access to it.
    class MovieV
    {
        public $title;
        private $rating; //so the rating can't be modify

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating ($rating); //Check point: 1.2
        }
        function getRating(){ //No parameter included
            return $this->rating;
        }
        // function setRating($rating){  //Send a parameter
        //     $this->rating = $rating;
        // }
        function setRating($rating){  //Same as previous one, although with conditionals for rating
            if($rating == "G" || $rating =="PG" || $rating =="PG-13" || $rating =="R" || $rating =="NR"){
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }

    }
    $avengers = new MovieV("Avengers", "G13"); //Point 1.2: in purpose pasing a G13 as an invalid rating and it's connected with declaration in the constructor: $this->setRating ($rating);
        // G, PG, PG-13, R, NR
        $avengers->setRating("R");
    echo $avengers->getRating();

    ?>


</body>

</html>