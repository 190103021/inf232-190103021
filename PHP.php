<!DOCTYPE html>
<html>
<body>

<?php
     echo "My solution from edabit.com <br>";


     
     function reverseImage($image) {
	$rev = array();
	for($i = 0; $i < count($image); $i++){
		for($j = 0; $j < count($image[$i]); $j++){
		  if($image[$i][$j] == 0)
				$rev[$i][$j] = 1;
			else
				$rev[$i][$j] = 0;
	  }
	}
	return $rev;
}
?>

</body>
</html>