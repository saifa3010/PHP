<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return "Yes it is a palindrome ";
  else
	  return "No it is a palindrome";
}
echo check_palindrome('Eva, can I see bees in a cave');
?>
