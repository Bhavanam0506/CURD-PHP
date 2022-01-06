<html>
  <style>
    table,th,tr,td{border:1px solid black;
    background-color: silver;}
    td{
      background-color:white;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <body>
  <div class="row">
    <div class="col col-8">
  <?php
   require_once('curd.php');
   $user=new USER();
   $gData = $user->fetchData();?>
  <table class="table table-striped table-dark table-bordered" style="margin: 20px 50px 50px 150px ;">
    <thead>
      <tr>
      <th>userid</th>
          <th>first_name</th>
          <th>last_name</th>
          <th>email</th>
          <th>phoneno</th>
          <th>Actions</th>
      </tr>
   </thead>
  
  <tbody>
    <?php
       foreach($gData as $g) { 
    ?> 
    
  
      <tr>
            <td> <?php echo" ".$g["user_id"]; ?> </td>
            <td> <?php echo" ".$g["fname"]; ?> </td>
            <td> <?php echo" ".$g["lname"]; ?> </td>
            <td> <?php echo" ".$g["email"]; ?> </td>
            <td> <?php echo" ".$g["phoneno"]; ?> </td>
            
            <td><input type="button" value="remove" style="background-color:silver;" onclick='location.href="delete.php?user_id=<?php echo $g["user_id"];?>"'>
            <input type="button" value="update" style=" background-color:silver;" onclick='location.href="update.php?user_id=<?php echo $g["user_id"]?>p&fname=<?php echo $g["fname"];?>
            &lname=<?php echo $g["lname"];?>&email=<?php echo $g["email"];?>&phoneno=<?php echo $g["phoneno"];?>"'>
            <input type="button" value="insert" style=" background-color:silver;" onclick='location.href="add.php?user_id=<?php echo $g["user_id"]?>p&fname=<?php echo $g["fname"];?>
            &lname=<?php echo $g["lname"];?>&email=<?php echo $g["email"];?>&phoneno=<?php echo $g["phoneno"];?>"'></td> 
  
  
      </tr>
  
    <?php }?>
  </tbody>
 </table>
       </div>
       </div>
       
</body>
</html>