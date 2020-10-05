<?php
/**
 * Die and inspect variable
 */
function kill($var){
  die("<pre>". print_r($var, true));
}

function lipsum($times = 3){
  $lipsumSSS = "Lorem ipsum dolor sit amet";
  $lipsumSS = "Lorem ipsum dolor sit amet, consectetur adipiscing elit";
  $lipsumS = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac dui mollis, consequat enim at, tempus velit. Etiam feugiat a dolor id maximus. ";
  $lipsumM = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac dui mollis, consequat enim at, tempus velit. Etiam feugiat a dolor id maximus. Nunc cursus eros sit amet blandit fringilla. Duis vitae nisi fermentum, convallis erat at, malesuada elit. Aliquam tincidunt tincidunt.";
  $lipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac dui mollis, consequat enim at, tempus velit. Etiam feugiat a dolor id maximus. Nunc cursus eros sit amet blandit fringilla. Duis vitae nisi fermentum, convallis erat at, malesuada elit. Aliquam tincidunt tincidunt fringilla. Nulla malesuada enim a auctor ultrices. Aliquam consectetur elit ac dui cursus aliquet. Maecenas hendrerit porta tellus, sit amet interdum velit commodo sed. Vivamus tincidunt tellus pulvinar semper fermentum.";
  if($times == 1){ echo $lipsumSSS; }
  elseif($times == 2){ echo $lipsumSS; }
  elseif($times == 3){ echo $lipsumS; }
  elseif($times == 4){ echo $lipsumM; }
  elseif($times == 5){ echo $lipsum; }
  elseif($times == 6){ echo "$lipsum $lipsum"; }
  elseif($times == 7){ echo "$lipsum $lipsum $lipsum"; }
}

function spacer($n){
  echo '<div class="spacer" style="height: '. $n .'px;"></div>';
}

// -------------------------------------
// PROJECT SPECIFIC
// -------------------------------------

function randomLogo () {
  $options = ["&Ocirc;MMZZ", "&Ouml;MMZZ", "&Otilde;MMZZ", "&Omacr;MMZZ"];
  $i = rand(0, count($options) - 1);
  return $options[$i];
}