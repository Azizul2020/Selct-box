<?php 
	if(!isset($_GET["value"])){
		header("location: index.php");
	}
	if(isset($_GET["value"])){
		$id=$_GET["value"];
?>
	<div class="input-group-prepend">
		<label class="input-group-text" id="choose">Choose Framework</label>
	</div>
	
	<select class="form form-control form-group">
<?php 
		include("db.php");
		$q="SELECT * FROM framework WHERE p_id='$id'";
		$rq=mysqli_query($connect,$q);
		while($data=mysqli_fetch_array($rq)){
?> 	
<option><?php echo $data["name"];?></option>
<?php }
	
	}
 
 ?>
</select>