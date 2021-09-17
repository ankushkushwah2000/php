<?php

$students = array ('vikas'=>array('age'=>20, 'marks'=>40, 'result'=>'pass'),
	               'rahul'=>array('age'=>40, 'marks'=>50, 'class'=>'bca'));



echo "<pre>";
print_r($students);
echo $students['vikas']['age'];
echo $students['rahul']['class'];
?>