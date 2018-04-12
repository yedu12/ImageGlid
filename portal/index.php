
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Select image to upload:</h2>
    <br/>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <button type="submit" value="Upload Image" name="submit">submit</button>
</form>

</body>
</html>
<style type="text/css">
	body{
		text-align: center;
	}
	input,select,textarea{
		height: 55px;
		width: 300px;
		margin: 15px;
		padding: 10px;
		border:1px solid lightgray;
		transition: 0.5s;
		border-bottom: 3px solid lightgray;
	
	}
	button{
		height: 55px;
		width: 200px;
		margin: 15px;
		background: rgb(200,30,50);
		color: white;
		border: 0px solid gray;
		transition: 0.5s;
	}
	button:hover{
		box-shadow: 1px 1px 4px 3px  rgb(200,30,50);
	}
	input:hover,select:hover,input:focus,select:focus{
		box-shadow: 0px 0px 4px 1px violet;

	}
</style>

