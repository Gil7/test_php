<?php


function wordCount($input) {
  $count = str_word_count($input);
  echo "The text includes $count words.<br />";
}
 
function charCount($input) {
  $charcount = strlen($input);
  echo "The text includes $charcount characters.<br />";
}


?>
 

