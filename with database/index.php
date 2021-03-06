<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Dependent Select Option Value With Database</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css" media="all" />
</head>
<body>
	<div class="container col-md-6 mt-5">
		<h1 class="text-center text-primary mb-4">Select Option Value With Database</h1>
		<div class="input-group">
		<div class="input-group-prepend">
			<label class="input-group-text" id="choose">Choose Programming</label></div>
				<select class="form form-control" oninput="func(this.value);">
					<option>Select</option>
					<?php 
						include("db.php");
						$q="SELECT * FROM program";
						$rq=mysqli_query($connect,$q);
						while($data=mysqli_fetch_array($rq)){
					?>
					<option value="<?php echo $data["id"];?>"><?php echo $data["name"];?></option>
						<?php } ?>
				</select>
		
		</div>
		<div class="input-group mt-3" id="dependent"></div>
	
	</div>
	
	<script type="text/javascript">
		function func(data){
			var show=document.getElementById("dependent");
			var xhr=new XMLHttpRequest();
			xhr.open("GET","backend.php?value="+data,true);
			xhr.onload=function(){
				show.innerHTML=this.responseText;
			}
			xhr.send();
		}
	</script>
</body>
</html>