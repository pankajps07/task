<?php
include("config.php");
if (isset($_POST['submit'])) {
	$pricetype=$_POST['pricetype'];
	$title=$_POST['title'];
	$organizer=$_POST['organizer'];
	$website=$_POST['website'];
	$category=$_POST['category'];
	$descr=$_POST['descr'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];	
	$link=$_POST['link'];

	$file=$_FILES['file'];
	$file1=$_FILES['file1'];

	$ticket_type=$_POST['ticket_type'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];

	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];



// -----------------------first------------------
	$filename=$file['name'];
	$path=$file['tmp_name'];
	$error=$file['error'];
	$file_ext=explode(".",$filename);
	$check=strtolower(end($file_ext));
	$valid=array('png','jpg','jpeg');

// ------------------------second--------------------------

	$filename1=$file1['name'];
	$path1=$file1['tmp_name'];
	$error1=$file1['error'];
	$file_ext1=explode(".",$filename1);
	$check1=strtolower(end($file_ext1));
	$valid1=array('png','jpg','jpeg');
	
	$dest1='img/'.$filename1;
	move_uploaded_file($path1, $dest1);

$sql="INSERT INTO file(pricetype,title,organizer,website,category,descr,latitude,longitude,link,file,file1,ticket_type,qty,price,start_date,end_date) values ('$pricetype','$title','$organizer','$website','$category','$descr','$latitude','$longitude','$link','$dest','$dest1','$ticket_type','$qty','$price','$start_date','$end_date')";


$res=mysqli_query($con,$sql);

if($res){
	?>
		<script>
			window.location="index.php";
		</script>
	<?php
}


}


 ?>

