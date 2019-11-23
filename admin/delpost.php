<?php 

include '../lib/Session.php'; 
Session::checkSession();

?>

<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../helpers/Format.php'; ?>
<?php

$db = new Database();

?>

<?php

if (!isset($_GET['deltid']) || $_GET['deltid'] == NULL) {
	echo "<script>window.location = 'postlist.php'</script>";
}
else
{
 $deltedpost = $_GET['deltid'];

$querypost ="select * FROM blog_post WHERE id='$deltedpost' ";
		   $getData=  $db->select($querypost);
		    if($getData){
		
		      while ($delimg = $getData->fetch_assoc()) {
		      	$dellink = $delimg['images'];
		      	unlink($dellink);
		      }
		     }
  $delquery ="delete FROM blog_post WHERE id='$deltedpost' ";
		   $deldata=  $db->delete($delquery);

		   if ($deldata) {
		   echo "<script> alert('Data Deleted Successfull.'); </script>";
		   echo "<script>window.location = 'postlist.php'; </script>";
		   }
		   else
		   {
		   	  echo "<script> alert('Data Deleted  not Successfull '); </script>";
		      echo "<script> window.location = 'postlist.php'; </script>";
		   }
}

?>