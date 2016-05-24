<?php
	 $i=0;
	$array=array("apple", "orange", "kiwi", "peach");
		while($array[$i]){
			echo "Key: $i Value: $array[$i] <br />";
			$i++;
		}

	// while($array[$i]){
	// 	echo $array[$i];
	// 	$i++;
	// }

	// *****foreach command
	// $array=array("cat","dolphin", "bat", "fish");
	// 	print_r($array);
	// 	foreach ($array as $key=>$value){
	// 		echo "Key: $key Value: $value <br />";

	// 	}
	// for($i=500; $i>=100; $i=$i-5){
	// 	echo $i. "<br />";
	// }
	

?>
<!-- *********IF ELSE STATEMENTS
// $number=1;
	// $otherNumber=2;
	// $thirdNumber=2;
	// ****use OR operator if you want only one out of two statements to be true
	// if($thirdNumber==$otherNumber OR $number==$otherNumber){
	// *****comparing all three to see if they are the same value
	// if($thirdNumber==$otherNumber AND $number==$otherNumber){
	// if($thirdNumber==$otherNumber){
	// ****if number is not equal to other number
	// if(!($number==$otherNumber)){
	// *****if number is not equal to other number
	// if($number!=$otherNumber){
	// *******if number is equal to other number
	// if($number=$otherNumber){
	// if($number==1){
	// 	echo "true";
	// }
	// else{
	// 	echo "false";
	// } -->


<!-- ****ARRAY INTRO -->

 	<!-- // ****you can also use unset command to remove variables
 	// $name="Spock";
 	// 	unset($name);
 	// ****removing element from an array
 	// 	unset($thirdArray["Germany"]);
 	// 		print_r($thirdArray);
 	// ****if you want to add another element to an array and you dont know how long it is
 	// 	$anotherArray[]="salad";
 	// 		print_r($anotherArray);
 	// ****if you dont want number position of element to show or keys you can write an array like the example below. Where the country is the key and the language is the value
 	// $thirdArray=array(
 	// 	"France" => "French",
 	// 	"USA" => "English",
 	// 	"Germany" => "German"
 	// 	);
 	// 		print_r($thirdArray);
 		// echo "<br /> <br />";
 	// ****you can also define a new array by
 	// 	$anotherArray[0]="pizza";
 	// 	$anotherArray[1]="cheese";
 			// print_r($anotherArray);
// 	****use array command to make an array in php
	// $myArray=array("pizza", "cake", "candy");
 	// ****use print_r($ + name of your array) and it will display the elements in your array and the position of each element in the array
		// print_r($myArray);
 	// ****accessing elements by position
 	// 	echo $myArray[2];
	//**** php variables start with a string $
	// $test="I'm a variable";
	// ****then to display the variable you would
	// 	echo $test;
	//**** echo is used to write text in php
	// echo "This is php!";
	// ****for double qoutes in a string use escape key
	// $test="I'm a variable";
	// $test2="so am I";
	// ****to concat strings in php its a period instead of +
	// echo $test.$test2;
	// $number=75;
	// 	echo $number/3;
	// $name="Rigby";
	// 	echo "My name is" .$name;
	// $name="Spock";
	// $a="name";
	// 	echo $$a; -->