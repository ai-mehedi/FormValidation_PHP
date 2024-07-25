<!DOCTYPE html>
<html>

<body>

  <h2>HTML Forms</h2>


  <?php
$name=$email=$website=$comment=$gender='';
$errname=$erremail=$errwebsite=$errcomment=$errgender='';

if($_SERVER['REQUEST_METHOD']=='POST'){
$name=      validation($_POST['name']);
$email=     validation($_POST['email']);
$website=   validation($_POST['website']);
$comment=   validation($_POST['comment']);
$gender=    validation($_POST['gender']);

if(empty($_POST['name'])){
    echo $errname='Name Field Must not be Empty! <br>';
}else{
  echo  $name.'<br>';
}
if(empty($_POST['email'])){
    echo $erremail='Email Field Must not be Empty! <br>';
}elseif(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)){
    echo $erremail='Please Submit Valid Email! <br>';

}else{
  echo  $email.'<br>';
}
if(empty($_POST['website'])){
    echo $errwebsite='website Field Must not be Empty! <br>';
  }elseif(!filter_var($_POST['website'] ,FILTER_VALIDATE_URL)){
    echo $errwebsite='Please Submit Valid URL! <br>';

}else{
    echo  $website.'<br>';
  }
  if(empty($_POST['comment'])){
    echo $errcomment='comment Field Must not be Empty! <br>';
  }else{
    echo  $comment.'<br>';
  }
  if(empty($_POST['gender'])){
    echo  $errgender='gender Field Must not be Empty! <br>';
  }else{
    echo  $gender.'<br>';
  }

}

function validation($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>


  <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="name"><br>
    <label for="lname">Email:</label><br>
    <input type="text" id="lname" name="email"><br><br>
    <label for="lname">website url:</label><br>
    <input type="text" id="lname" name="website"><br><br>
    <label for="lname">comment:</label><br>
    <textarea name='comment'></textarea><br><br>
    <input type="radio" id="css" name="gender" value="male">
      <label for="css">Male</label><br>
      <input type="radio" id="javascript" name="gender" value="female">
      <label for="javascript">Female</label>

    <input type="submit" value="Submit">
  </form>


</body>

</html>