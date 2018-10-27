<!DOCTYPE html>
<html>
<head>
	<title>UN4 UPLOADER</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="col-md-8 col-md-offset-2">
    <h3>File Input Example</h3>
<form method="POST" action="upload.php" enctype="multipart/form-data">
	<!-- COMPONENT START -->
	<div class="form-group">
		<div class="input-group input-file" name="Fichier1">
			<span class="input-group-btn">
        		<button class="btn btn-default btn-choose" type="button">Choose</button>
    		</span>
    		<input type="text" class="form-control" placeholder='Choose a file...' />
    		<span class="input-group-btn">
       			 <button class="btn btn-warning btn-reset" type="button">Reset</button>
    		</span>
		</div>
	</div>
	<!-- COMPONENT END -->
	<div class="form-group">
		<button type="submit" class="btn btn-primary pull-right">Submit</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
    <!-- <p>Submit is disabled because it's not handle on this site
    <p>Input Reset or Input Choose can be omitted
    <p>Input Reset or Input Choose can be placed on left or right -->
</form>
        

</div>
</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="upload.js"></script>
</body>
</html>


