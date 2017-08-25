<?php
	//Bohan 
	//this page is for administrator to add new video information
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
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/styles.css'>
    <title>video admin</title>
</head>

 <body>

 <div class = 'row'>
 	<div class = 'col-xs-6 col-xs-offset-3'>  


   <h1>Video Description Editor</h1>



 <form action='entervideo.php' method='post' enctype='multipart/form-data' target='view1'>
<fieldset class='form-group'>

  <label for='textinput'>Video Name</label>  
  <input name='videoname' type='text' class='form-control input-md'>

</fieldset>

<fieldset class='form-group'>
  <label for='textinput'>Quantity</label>  
  <input name='quantity' type='text' class='form-control input-sm'>
</fieldset>


<fieldset class='form-group'>
  <label for='textinput'>Description</label>  
  <input name='description' type='text'  class='form-control input-lg'>
</fieldset>
   <input type='submit' name='act' value='enter'>



</div>

</div>


 </form>

 </body>
</html>";
}else{
	echo "sorry,you are not admin";
}
?>