<?php 
function angka($angka){
    $detect_dot = strpos($angka,'.');
    if ($detect_dot > 0) {
      $explode = explode('.',$angka);
      $number = number_format($explode[0],0,",",".");
  
      $after_comma = substr($explode[1],0,2);
      if (strlen($explode[1]) == 1) {
        $after_comma = $explode[1].'0';
      }
  
      $final_number = $number.",".$after_comma;
    } else {
      $number = number_format($angka,0,",",".");
      $final_number = $number.",00";
    }
    return $final_number;
  }
?>