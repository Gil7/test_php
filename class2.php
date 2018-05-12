<?php

function mostcommonWords($input) {
   $quatity = array();
   
   $input = str_replace(' ', '', $input);
   $helper = $input;
    $input = str_split($input);
    $totales = array();
   for($i=0;$i<count($input);$i++){ 
      
      $total = substr_count($helper, $input[$i]); 
      $totales[$input[$i]] = $total;
    } 
    
    
    $max =  max($totales);
    $key = array_search ($max, $totales);
    
  
  echo "Letra : $key con mas apariciones, total :  $max <br />";
}

?>
 

