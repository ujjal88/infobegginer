<?php
 include 'inc/header.php'; 
 include 'confiq.php'; 
 include 'Database.php'; 
 ?>

<?php
$id = $_GET('ID');
$db= new Database();

$query = "SELECT * FROM  test_blog WHERE id=$id";
$getData =$db->select($query)->fetch_assoc();


if (isset($_POST['submit'])) {
  $name   = mysql_real_escape_string($_POST['name']);
  $email  = mysql_real_escape_string( $_POST['email']);
  $skill  = mysql_real_escape_string($_POST['skill']);
  if($name == '' || $email == '' || $skill == '') {
    $error = "Field must not be empty!! ";
  } else{

    $query = "INSERT INTO test_blog(name,email,skill) values('$name', '$email', '$skill')";
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
      <td> <input type="text" name="name" value="<?php echo $getData['name'];?>"> </td>
    </tr>
    <tr>
      <td> Email </td>
      <td> <input type="text" name="email" value="<?php echo $getData['email'];?>"> </td>
    </tr>
    <tr>
      <td> Skill </td>
      <td> <input type="text" name="skill" value="<?php echo $getData['skill'];?>"> </td>
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