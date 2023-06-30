<?php

$subject= $_GET['subject'];
$text= $_GET['text'];

$censored_text= str_replace($subject, '***', $text);

echo $text." ".strlen($text)."<br>";
echo $censored_text." ".strlen($censored_text);
?>