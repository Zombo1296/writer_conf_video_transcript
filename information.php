<?php
	
	//Bohan
	//display the name and progress information of each long video
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
$query = "select ID,name,videos from video1";
$result = query_writers_db($query);
echo "<!DOCTYPE html>
<html lang='en'>

 <head>
  <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/styles.css'>
  <title>information</title>
 </head>";

 echo"<body>

  <div class = 'row'>
 	<div class = 'col-xs-8 col-xs-offset-2'>  

   <h1>Video Information</h1>";
	echo "<table class='table table-striped'>";
	echo "<tr>";
	echo "<td> </td>";
	echo "<td>Name</td>";
    echo "<td>number of footages</td>";
	echo "<td>Completed</td>";
	echo "<td>Finalized</td>";
	echo "<td>In Progress</td></tr>";
	while ($item = $result->fetch_assoc()) {
		echo "<tr>";
		$id=$item[ID];
		$name = $item[name];
		$videos = $item[videos];
		//get the number of completed transcription
		$query="select count(*) from video2 where ID1='$id' and (status = 5 or status = 6)";
		$result2 = query_writers_db($query);
		$item2 = $result2->fetch_assoc();
		$completed = $item2['count(*)'];
		//get the number of finalized transcription
		$query="select count(*) from video2 where ID1='$id' and status = 6";
		$result2 = query_writers_db($query);
		$item2 = $result2->fetch_assoc();
		$finalized = $item2['count(*)'];
		//get the number of transcriptions in progress
		$query="select count(*) from video2 where ID1='$id' and (status = 2 or status = 3 or status =4)";
		$result2 = query_writers_db($query);
		$item2 = $result2->fetch_assoc();
		$inprogress = $item2['count(*)'];
		echo "<td><input type='button' onclick=\"window.location.href='delete.php?id=$id'\" value='delete'></td>";
		echo "<td><a href='manage.php?id=$id'>$name</a></td>";
		echo "<td>$videos</td>";
		echo "<td>$completed</td>";
		echo "<td>$finalized</td>";
		echo "<td>$inprogress</td></tr>";
    }
	echo "</table>";
	mysql_close();

 echo"</div> 
  </div>
 </body>
</html>";
}else{
	echo "sorry,you are not admin";
}
?>