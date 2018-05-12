<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require('class/class.php');
  require('class2.php');

  
  echo '<strong>CODE EXAMPLE: REFACTORING</strong>.<br /><br />';
  
  $done = empty($_POST['formsubmit']) ? "" : $_POST['formsubmit']; 
  $fulltext = empty($_POST['fulltext'] )? "" : $_POST['fulltext'];
  
  if ($done) {
  // FORM RESULTS
    wordCount($fulltext);
    charCount($fulltext);
    mostcommonWords($fulltext);
  } else {
    // FORM
    echo "<form method='post'><textarea name='fulltext'></textarea>
      <input type='hidden' name='formsubmit' value='1' />
      <input type='submit' value='Analyze!' /></form>";
  }
 ?>

