<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $desc = $_POST['desc'];


$sql = "INSERT INTO `new` (`name`, `age`, `gender`, `email`, `phone`, `desc`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";
  

$result= mysqli_query($conn,$sql);
if($result){
  echo "submitted successfully";
}else{
  echo"inheritation is not successfull because of ".mysqli_error($comm);
}
}

  ?>