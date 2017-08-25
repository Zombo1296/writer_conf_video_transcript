<?php
	
	//Bohan
	//display information of every clip of one long video
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
$id1=$_GET["id"]; 
//get information of all clips of one long video
$query = "select ID,name,userID1,userID2,status from video2 where ID1=$id1";
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
	echo "<td><input type='button' onclick=\"window.location.href='information.php?id=$id1'\" value='return'></td><br>";
	echo "<table class='table table-striped'>";
	echo "<tr>";
	echo "<td> </td>";
	echo "<td>Name</td>";
    echo "<td>transcriber ID</td>";
	echo "<td>reviewer ID</td>";
	echo "<td>status</td></tr>";
	while ($item = $result->fetch_assoc()) {
		echo "<tr>";
		$id=$item[ID];
		$name = $item[name];
		$userID1 = $item[userID1];
		$userID2 = $item[userID2];
		$status=$item[status];
		echo "<td><input type='button' onclick=\"window.location.href='restore.php?id=$id'\" value='restore'></td>";
		echo "<td><a href='text.php?id=$id'>$name</a></td>";
		//display transcriber and reviewer
		echo "<td>$userID1</td>";
		echo "<td>$userID2</td>";
		//display progress information of one video clip according to status attribute
		if($status==1){
		   echo "<td>needs transcribing</td></tr>";
	   }else if ($status==2){
		   echo "<td>transcribing</td></tr>";
	   }else if ($status==3){
           echo "<td>needs review</td></tr>";
        }else if ($status==4){
           echo "<td>reviewing</td></tr>";
       }else if ($status==5){
		   echo "<td>complete</td></tr>";
	   }else{
		   echo "<td>finalized</td></tr>";
	   }
    }
	echo "</table>";
	echo "<td><input type='button' onclick=\"window.location.href='cascade.php?id=$id1'\" value='show cascading finalized transcript'></td>";
	mysql_close();

 echo"</div> 
  </div>
 </body>
</html>";
}else{
	echo "sorry,you are not admin";
}
?>