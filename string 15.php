<?php 
$name ="anku";

echo strlen($name);


$len =strlen($name);
if($len<=5);
{
	echo "your password should be more than 5 character long ";
}
?>


<br><br>



<?php 
$name = strtoupper("pninfosys");
echo $name;


//strtolower


$username ="ankush@gmail.com";
$entered =strtolower("ankush@gmail.com");
if($username == $entered){
	echo "your mail correct";
}

else{
	echo "please cheak your email";
}



?>