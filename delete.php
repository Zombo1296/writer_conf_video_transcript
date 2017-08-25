<?php
	
	//Bohan
	//delete all information of one long video
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
//delete all clip information of this long video
$query = "delete from video2 where id1 = $id";
$result = query_writers_db($query);
//delete information of this long video
$query = "delete from video1 where id = $id";
$result = query_writers_db($query);
echo "<a href='information.php'>success,click here to continue</a>";
}else{
	echo "sorry,you are not admin";
}
?>