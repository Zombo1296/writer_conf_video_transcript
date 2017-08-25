<?php
	
	//Bohan
	//restore one video clip's status to the last phase
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
$id=$_GET['id']; 
//get video clip status
$query = "select status,ID1 from video2 where id = $id";
$result = query_writers_db($query);
$item = $result->fetch_assoc();
$status=$item[status];
$id1=$item[ID1];
//change the status attribute to a smaller number according to current value,delete transcription information and reset saved attribute if necessary
if($status==1){
	echo "<p class='text-center'><a href='manage.php?id=$id1'>can't restore further, click here to continue</a></p>";
}else if ($status==2){
	$query = "update video2 set status = 1 where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set userID1 ='' where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set text ='' where id = $id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='manage.php?id=$id1'>restored status from \"transcribing\" to \"needs transcribing\", click here to continue</a></p>";
}else if ($status==3){
    $query = "update video2 set status = 2 where id = $id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='manage.php?id=$id1'>restored status from \"needs review\" to \"transcribing\", click here to continue</a></p>";
}else if ($status==4){
    $query = "update video2 set status = 3 where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set userID2 ='' where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set  text2 ='' where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set saved = 0 where id = $id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='manage.php?id=$id1'>restored status from \"reviewing\" to \"needs review\", click here to continue</a></p>";
}else if ($status==5){
	$query = "update video2 set status = 4 where id = $id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='manage.php?id=$id1'>restored status from \"complete\" to \"reviewing\", click here to continue</a></p>";
}else{
    $query = "update video2 set status = 5 where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set  text3 ='' where id = $id";
	$result = query_writers_db($query);
	$query = "update video2 set saved2 = 0 where id = $id";
	$result = query_writers_db($query);
	echo "<p class='text-center'><a href='manage.php?id=$id1'>restored status from \"finalnized\" to \"complete\", click here to continue</a></p>";
}
}else{
	echo "<p class='text-center'>sorry,you are not admin</p>";
}
?>