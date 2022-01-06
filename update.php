              
              <!doctype html>
<html lang="en">
  <style>

    </style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form method="POST" style="width:400px; margin:auto">
   <h2> UPDATE WORKER`S INFO</h2>
  
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">first name</label>
    <input type="text" class="form-control" name="fname" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">last name</label>
    <input type="text" class="form-control" name="lname" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone no</label>
    <input type="text" class="form-control" name="phoneno">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

              </form></html>
              <?php
              require_once('curd.php');
              $user=new USER();
              if(isset($_POST['submit'])){
             
               
                 $fname=$_POST['fname'];
                 $lname=$_POST['lname'];
                 $email=$_POST['email'];
                 $phoneno=$_POST['phoneno'];
                 $user_id=$_REQUEST['user_id'];
              /*require_once('curd.php');
              $user=new USER();
              
                  if(isset($_POST['submit']){
              
                 $user_id=$_POST['userid'];
                 $fname=$_POST['fname'];
                 $lname=$_POST['lname'];
                 $email=$_POST['email'];
                 $phoneno=$_POST['phoneno'];
              
              */
                  $gData = $user->edit($user_id,$fname,$lname,$email,$phoneno);
                  
                 echo($gData);}
              
                ?>