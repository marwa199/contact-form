<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  
  $user = trim(filter_var($_POST['user-name'],FILTER_SANITIZE_STRING)) ;
  $email = trim(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
  $phone = trim(filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT));
  $pass = $_POST['password'];
  $comment = $_POST['comment'];

  echo $user;

  $usererror = '';
  if (strlen($user) <= 3){
    $usererror = "user name must be larger than <strong>3</strong> chars";
  }

  // $errors = array();

  // if (strLen($user) < 3){
  //   $errors[] = "username must be longer than three chars";
  // }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;900&display=swap" rel="stylesheet"> 

    <title>contact form</title>
</head>
<body>

<!-- start form -->
<div class="container">
  <form class="m-auto w-50 pt-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h2 class="text-center">Contact Me</h2>

    <div class="errors">
      <?php
        // if (isset($errors)){
        //   foreach($errors as $error){
        //     echo $error . '<br>';
        //   }
        // }
      ?>
    </div>

    <div class="form-group">
        <label for="exampleInputName">User Name
          <div class="astricx">*</div>
        </label>
        <input type="text" name="user-name" class="form-control" value="<?php if(isset($user)){echo $user;} ?>" id="exampleInputName">
          <?php 
            if(! empty($usererror)){
          ?>
            <div class="alert alert-danger alert-dismissible " role="start">
          <?php 
            echo $usererror; 
          ?>  
          </div>
          <?php 
              }
          ?>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address
        <div class="astricx">*</div>
        </label>
        <input type="email" name="email" class="form-control" value="<?php if(isset($email)){echo $email;} ?>" id="exampleInputEmail1" >
      </div>
      <br>
      <div class="form-group ">
        <label class="exampleInputPhone">Phone Number</label>
        <input type="text" name="phone" class="form-control" value="<?php if(isset($phone)){echo $phone;} ?>" id="exampleInputPhone">
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputPassword1">Password
        <div class="astricx">*</div>
        </label>
        <input type="password" name="password" class="form-control" value="<?php if(isset($pass)){echo $pass;} ?>" id="exampleInputPassword1">
      </div>
      <br>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Comment</label>
        <textarea class="form-control" name="comment" value="<?php if(isset($comment)){echo $comment;} ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>