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

if (!isset($_GET['delslider']) || $_GET['delslider'] == NULL) {
	echo "<script>window.location = 'sliderlist.php'</script>";
}
else
{
 $deltedpost = $_GET['delslider'];

$querypost ="select * FROM blog_slider WHERE id='$deltedpost' ";
		   $getData=  $db->select($querypost);
		    if($getData){
		
		      while ($delimg = $getData->fetch_assoc()) {
		      	$dellink = $delimg['images'];
		      	unlink($dellink);
		      }
		     }
  $delquery ="delete FROM blog_slider WHERE id='$deltedpost' ";
		   $deldata=  $db->delete($delquery);

		   if ($deldata) {
		   echo "<script> alert('Data not Deleted Successfull.'); </script>";
		   echo "<script>window.location = 'sliderlist.php'; </script>";
		   }
		   else
		   {
		   	  echo "<script> alert('Data Deleted Successfull '); </script>";
		      echo "<script> window.location = 'sliderlist.php'; </script>";
		   }
}

?>