<?php
 include 'inc/header.php'; 
 include 'confiq.php'; 
 include 'Database.php'; 
 ?>

<?php

$db= new Database();
if (isset($_POST['submit'])) {
  $name   = mysql_real_escape_string($_POST['name']);
  $email  = mysql_real_escape_string( $_POST['email']);
  $skill  = mysql_real_escape_string($_POST['skill']);
  if($name == '' || $email == '' || $skill == '') {
    $error = "Field must not be empty!! ";
  } else{

    $query = "INSERT INTO test_blog(Name,Email,Skill) values('$name', '$email', '$skill')";
    $create =$db->insert($query);
  }
}



?>


<?php

if (isset($error)) {
  echo "<span style='color:green;'>".$error."</span>";
}

?>

<div class="container">
  <form action="creat.php" method="post" >
  
  <table class="table table-dark">
  <tbody>
    <tr>
      <td> Name </td>
      <td> <input type="text" name="name" placeholder="Enter your Name" required> </td>
    </tr>
    <tr>
      <td> Email </td>
      <td> <input type="text" name="email" placeholder="Enter your Email" required> </td>
    </tr>
    <tr>
      <td> Skill </td>
      <td> <input type="text" name="skill" placeholder="Enter your Skill" required> </td>
    </tr>

     <tr>
       <td></td>
      <td> <input type="submit" name="submit" value="submit"> <input type="reset" value="Cancle" ></td>
     
    </tr>

    

  </tbody>
</table>
<a href="index.php">GO Back </a>
</form>
</div>




<?php include 'inc/footer.php'; ?>