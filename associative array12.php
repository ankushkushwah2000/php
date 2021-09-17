<?php 

$courses = array ("id"=>1,"name"=>"ankush","city"=>"gwalior","php"=>"12000");
echo "<pre>";
print_r($courses);
// echo $courses["city"];
// echo $courses; erro aata h

foreach ($courses as $key =>$value){
	echo $key ." ".$value ."<br/>";
}

foreach ($courses as $a){

	echo $a."<br>";
}
?>