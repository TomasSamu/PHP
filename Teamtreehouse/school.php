<?php
$firstname = 'Tomas';
$lastname = 'Samuelis';
$currentgrade = 11;
$finalaverage = .8;
$messagebody = '';


if (!$firstname || !$lastname){
	echo 'Please enter a student name';
} elseif ($currentgrade < 9 || $currentgrade > 12) {
	echo 'This is only for high school students';	
} else {
	
	if ($finalaverage < .7){
		$mesagebody = 'We look forward to seeing you at summer school, beginning July 1st!';
		echo $messagebody;
		
	} else {
		switch ($currentgrade){
			case 9:
			$messagebody = 'Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!';
			echo $messagebody;
			break;
			
			case 10:
			$messagebody = 'Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!';
			echo $messagebody;
			break;
			
			case 11:
			$messagebody = 'Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!';
			echo $messagebody;
			break;
			
			case 12:
			$messagebody = 'Congratulations! You’ve graduated High School! Don’t forget to come back and visit.';
			echo $messagebody;
			break;
			
		}
		
	}
}



