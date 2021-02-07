<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

     $weight = 49;
     echo "My weight is " . $weight . "<br>";


     if ($weight < 50) {
      echo "You are thin!";
     } elseif ($weight < 65) {
     echo "You are normal!";
     } else {
     echo "You are thick!";
     }
        
     ?>
</body>
</html>