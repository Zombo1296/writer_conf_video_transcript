<?php
	
	//Bohan
	//display all versions of transcription of one video clip
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
$query="select id1,text,text2,text3,status from video2 where ID=$id";
$result = query_writers_db($query);

$item = $result->fetch_assoc();
$id1=$item[id1];
$text=$item[text];
$text2=$item[text2];
$text3=$item[text3];
$status=$item[status];

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

echo "<p class='text-center'><input type='button' class='btn btn-primary btn-xs' onclick=\"window.location.href='manage.php?id=$id1'\" value='return'><br></p>";
echo "<div class='row'>";
echo "<div class = 'col-xs-10 col-xs-offset-1'>";
echo "<table class='table table-bordered'>";
echo "<thead>";
echo "<tr><th>Transcriber's Transcription</th>";
echo "<th>Reviewer's Transcription</th>";
echo "<th>Administrator's Transcription</th></tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr><td>$text</td>";
echo "<td>$text2</td>";
echo "<td>$text3</td></tr>";
echo "</tbody>";
echo "</table>";
echo "</div>"; //col div
echo "</div>"; //row div
//if transcription is complete,allow administrator to finalize it
if($status==5){
	echo "<p class='text-center'><input type='button' class='btn btn-primary btn-xs' onclick=\"window.location.href='finalize.php?id=$id'\" value='finalize'><br></p>";
}
}else{
	echo "<p class='text-center'>sorry,you are not admin</p>";
}


?>