<?php
$con=new mysqli('localhost','root','','perfume_shop');
// $con=new mysqli('sql200.infinityfree.com','if0_37228181','yF7rXDfa2LDA5','if0_37228181_perfume_shop');

if($con){
  echo "success";
}else{
  mysqli_error($con);
}

?>