<?php
//--------------------- Set these paramaters-----------

// Subject of email sent to you. 
$subject = $_POST['subject'];


// Your email address.  This is where the from information will be sent. 
$emailadd = 'info@dinacocorp.com'; 

// Where to rediret after form is processed 
$url = 'index.html#thankyou.html'; 

// Makes all fields required. If set to '1' no feild can not be empty. If set to '0' ant or all fields can be empty. 
$req = '0'; 

// ------------------ Do not edit below this line --------------
$text = "Results from Dinaco Contracting form:\n\n"; 
$space = ' ';
$line = '
'; 
foreach ($_POST as $key => $value) 
{
if ($req == '1')
{
if ($value == '')
{echo "$key is empty";die;}
}
$j = strlen($key);
if ($j >= 20) 
{echo "Name of form element $key cannot be longer than 20 characters";die;} 
$j = 20 - $j; 
for ($i = 1; $i <= $j; $i++) 
{$space .= ' ';} 
$value = str_replace('\n', "$line", $value); 
$conc = "{$key}:$space{$value}$line"; 
$text .= $conc; 
$space = ' ';
} 
mail($emailadd, $subject, $text, 'From: '.$emailadd.''); 
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=' .$url. '">';
?>