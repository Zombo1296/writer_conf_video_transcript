<?php
	
	//Bohan
	//save administrator's transcription
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
$id=$_GET["id"];
//get video clip's ID
$query = "select status from video2 where id = $id";
$result = query_writers_db($query);
$item = $result->fetch_assoc();
$status = $item[status];
if($status==5){
//if transcript is finished,change status and save transcript
if($_POST['finished']=='yes'){		
	$text = $_POST["text"];
	$text=$writers_db->real_escape_string($text);
	$id=$_GET["id"];
	$query = "update video2 set text3 = '$text' where id=$id";
	$result = query_writers_db($query);
	$query = "update video2 set status = 6 where id=$id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='finalize.php?id=$id'>success,click here to continue</a></p>";
//if user just want to save it for now, just save transcript, don't change status
}else if($_POST['finished']=='no'){
	$text = $_POST["text"];
	$text=$writers_db->real_escape_string($text);
	$id=$_GET["id"];
	$query = "update video2 set text3 = '$text' where id=$id";
	$result = query_writers_db($query);
	$query = "update video2 set saved2 = 1 where id=$id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='finalize.php?id=$id'>success,click here to continue</a></p>";
}
}else{
	echo "<p class='text-center'><a href='finalize.php?id=$id'>error,click here to continue</a></p>";
}
}else{
	echo "<p class='text-center'>sorry,you are not admin</p>";
}
?>