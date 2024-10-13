<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
if($divisor == 1) {
    throw new Exception("Division by one");
  }
  return $dividend / $divisor;
}
try{
echo divide(5, 0);}
catch(Exception $e) {
  echo "Unable to divide.";
echo "<br>";
var_dump($e);
echo "<br>";
echo $e->getMessage() ;
echo "shit</br>";
	if($e->getMessage() == "Division by zero"){
echo "zerrrrrrrrrrrrrrrrrrrrrrrroo";
}
	if($e-> getMessage() == "Division by one"){
echo "onnnneeeeee";
}

}

?>