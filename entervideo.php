<html><body>
	<?php
	
	//Bohan
	//save video information into database
	$cwd[__FILE__] = __FILE__;
	if (is_link($cwd[__FILE__])) $cwd[__FILE__] = readlink($cwd[__FILE__]);
	$cwd[__FILE__] = dirname($cwd[__FILE__]);
	require_once($cwd[__FILE__] . "/../citizen_science_grid/header.php");
	require_once($cwd[__FILE__] . "/../citizen_science_grid/navbar.php");
	require_once($cwd[__FILE__] . "/../citizen_science_grid/footer.php");
	require_once($cwd[__FILE__] . "/../citizen_science_grid/my_query.php");
	require_once($cwd[__FILE__] . "/../citizen_science_grid/csg_uotd.php");
	$user = csg_get_user();
	print_header("Writers Conference", "", "writers_conference");
	print_navbar("Projects: Writers Conference", "Writers Conference", "..");
	
	if($user['id']==124821 or $user['id']==126547){
	if ( $_POST['act'] == "enter" ) {
	$videoname=$_POST['videoname'];
	$quantity=$_POST['quantity']; 
	$description=$_POST['description']; 
	$videoname=$writers_db->real_escape_string($videoname);
	$quantity=$writers_db->real_escape_string($quantity);
	$description=$writers_db->real_escape_string($description);
	$number=1;
	$filename="";
	//enter long video information
	$query = "insert into video1(name,description,videos) values ('$videoname', '$description', '$quantity')";
	$result = query_writers_db($query);
	//get long video ID
	$query = "select max(ID) from video1";
	$result = query_writers_db($query);
	$item = $result->fetch_assoc();
	$ID1 = $item['max(ID)'];
	//enter all clip information of that long video
	while($number<=$quantity){
		$filename=$filename."$videoname";
		$filename=$filename."-";
		if($number<10){
			$filename=$filename."00";
		}else if($number<100){
			$filename=$filename."0";
		}
		$filename=$filename."$number";
		$filename=$filename;
		$query = "insert into video2(ID1,ID2,name,status,description,saved) values ('$ID1', '$number', '$filename',1,'$description',0)";
		$result = query_writers_db($query);
		$filename="";
		$number++;
	}
	echo "registered";
	mysql_close();
	}
	}else{
		echo "sorry,you are not admin";
	}
	?>
</body></html>