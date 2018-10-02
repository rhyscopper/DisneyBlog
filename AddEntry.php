<!DOCTYPE html>
<html>
<head>

<title>Do The Impossible ..</title>
</head>
<body>

<?php

// define variables and set to empty values
$nameErr = "";
$name =  $comment = "";
$date= date ("Y/m/d");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["Title"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["Title"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }

   if (empty($_POST["Body"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["Body"]);
	  
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<?php
if(!empty($_POST["Title"]))
{
    $comment = $_POST["Body"];
    $nameErr = $_POST["Title"];
$posts = file_get_contents("entry.txt");


    $posts = "<h3>$name</h3> <h4>$comment &nbsp;&nbsp;&nbsp; $date</h4>" . $posts;


    file_put_contents("entry.txt", $posts);

  

    header( 'Location: http://webprojects.eecs.qmul.ac.uk/rc304/Miniproject/viewblog.php' );
}


?>
</body>
</html>
