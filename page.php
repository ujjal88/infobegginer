<?php include 'inc/header.php'; ?>

<?php

if (!isset($_GET['addpageid']) || $_GET['addpageid'] == NULL) {
	header('Location:404.php');
}else{

 $id = $_GET['addpageid'];
}


?>


<?php

$addquerypage = "select * from add_page where id='$id' ";

$addpagedetais = $db->select($addquerypage);
if ($addpagedetais) {
    while ($result=$addpagedetais->fetch_assoc()) {
        # code...
 

?>



	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2><?php echo $result ['name'];?></h2>
	
				<?php echo $result ['body']; ?>
	</div>

		</div>
		
		
<?php }} else{header('Location:404.php'); } ?>	
<?php include 'inc/sidbar.php';?>		
<?php include 'inc/footer.php';?>