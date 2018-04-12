
<?php

if(isset($_GET['name'])){
    include("connection.php");

    mysql_query("insert into stack(des,img)values('$_GET[name]','$_GET[img]')") or die(mysql_error());
    echo "<script>setTimeout(function(){window.location.href='index.php';},1000);</script>";
    die("Done !");


}

$target_dir = "ups/";
$name="vigama".date("his").rand()."_last.jpg";
$target_file = $target_dir .$name;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        die();
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists. Try to rename file with countOfimage .";
    die();
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" &&$imageFileType != "JPG" &&$imageFileType != "PNG" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    die();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The Image <b> ". basename( $_FILES["fileToUpload"]["name"]). "</b> has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$m=$name;
?>

<br/> <br/> Enter something about thie image ..
<form action="" method="get">
    <input type="text" name="name" >
    <input type="hidden" name="img" value="<?php echo $m; ?>">
    <button>SUBMIT</button>
</form>

<style type="text/css">
    body{
        font-family: Times New Roman;
        padding: 0px;
        margin: 0px;
        background: url();
        text-align: center;
    }
    #f{
        padding: 25px;
        //box-shadow: 1px 1px 3px 2px black;
        text-align: center;
        margin-top: 40px;
        min-width: 300px;
        font-size: 17px;
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
