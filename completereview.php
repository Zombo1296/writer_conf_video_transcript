<?php
	//Bohan
	//save revierer's transcription
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

$id1=$_GET["id1"];
$id2=$_GET["id2"];
$query = "select userID2,status from video2 where id1 = $id1 and id2 = $id2";
$result = query_writers_db($query);
$item = $result->fetch_assoc();
$status = $item[status];
$userID2 = $item[userID2];
$userID=$user['id'];
if($userID2!=$userID){
	echo "<a href='video.php?id1=$id1&id2=$id2'>error,click here to continue</a>";
}
else if($status==4){
//if transcription is finished, change status and save transcription
if($_POST['finished']=='yes'){		
	$text = $_POST["text"];
	$text=$writers_db->real_escape_string($text);
	$id1=$_GET["id1"];
	$id2=$_GET["id2"];
	$query = "update video2 set text2 = '$text' where id1 = $id1 and id2 = $id2";
	$result = query_writers_db($query);
	$query = "update video2 set status = 5 where id1 = $id1 and id2 = $id2";
	$result = query_writers_db($query);
	echo "<a href='video.php?id1=$id1&id2=$id2'>success,click here to continue</a>";
//if not finished, save transcription and mark saved, don't change status
}else if($_POST['finished']=='no'){
	$text = $_POST["text"];
	$text=$writers_db->real_escape_string($text);
	$id1=$_GET["id1"];
	$id2=$_GET["id2"];
	$query = "update video2 set text2 = '$text' where id1 = $id1 and id2 = $id2";
	$result = query_writers_db($query);
	$query = "update video2 set saved = 1 where id1 = $id1 and id2 = $id2";
	$result = query_writers_db($query);
	echo "<a href='video.php?id1=$id1&id2=$id2'>success,click here to continue</a>";
}
}else{
	echo "<a href='video.php?id1=$id1&id2=$id2'>error,click here to continue</a>";
}

?>