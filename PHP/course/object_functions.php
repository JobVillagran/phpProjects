<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    class Student
    {
        var $name;
        var $class;
        var $gpa;

        function __construct($aName, $aMajor, $aGpa)
        {
            $this->name = $aName;
            $this->major = $aMajor;
            $this->gpa = $aGpa;
        }
        function hasHonors(){
            if($this->gpa >= 3.5){
                return "true";
            }
                return "false";
        }
    }
    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo $student1->hasHonors();

    ?>


</body>

</html>