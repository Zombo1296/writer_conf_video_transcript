<?php
	//Bohan 
	//show combined transcription of a long video
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
//get finalized transcription of each video clip	
$query="select text3 from video2 where ID1=$id order by ID2 ASC";
$result = query_writers_db($query);
//display transcription
echo "<!DOCTYPE html>
<html lang='en'>
<head>
<head>
    <style type='text/css'>
        td { width: 30px; word-wrap: break-word; }
        table { width : 90px; table-layout: fixed; }
    </style>
</head>
   
</head>";
echo "<div class='row'>";
echo "<div class = 'col-xs-10 col-xs-offset-1'>";
echo "<table class='table table-bordered'>";
echo "<thead>";
echo "<tr><th>Finalize Transcription</th></tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr><td>";
while($item = $result->fetch_assoc()){
	$text3=$item[text3];
	echo "$text3";
}
echo "</td></tr>";
echo "</tbody>";
echo "</table>";
echo "</div>"; //col div
echo "</div>"; //row div




echo "<p class='text-center'><input type='button' onclick=\"window.location.href='manage.php?id=$id'\" value='return'></p>";
}else{
	echo "<p class='text-center'>sorry,you are not admin</p>";
}

?>