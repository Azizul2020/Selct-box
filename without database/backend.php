<?php 
	if(!isset($_GET["value"])){
		header("location: index.php");
	}
	if(isset($_GET["value"])){
		$option=$_GET["value"];
	
	$php=["Laravel","Codeigneter","Ajax"];
	$js=["React","Angular","vue"];
?>
	<div class="input-group-prepend">
		<label class="input-group-text" id="choose">Choose Framework</label>
	</div>
<select class="form form-control form-group">
<?php 
		if($option=="PHP"){
			foreach($php as $frame){ ?>
				<option><?php echo $frame; ?></option>
<?php   }
		}
		if($option=="JAVASCRIPT"){
			foreach($js as $frame){?>
				<option value=""><?php echo $frame; ?></option>
			<?php }
		}
	}		
?>
</select>