<!DOCTYPE html>
<?php
	
	//Bohan
	//administrator edits and finalizes transcription on this page
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
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bootstrap</title>
</head>
<body>


<?php
		if($user['id']==124821 or $user['id']==126547){
		$id = $_GET["id"];
		$query = "select name,status,text2,text3,saved2 from video2 where id = $id";
		$result = query_writers_db($query);
		$item = $result->fetch_assoc();
		$name=$item[name];
		$status=$item[status];
		$text2=$item[text2];
		$text3=$item[text3];
		$saved2=$item[saved2];
		echo "<div class='content container'>
				<div class='row'>
					<section class='col-sm-12'>
						<h2>$name&nbsp&nbsp&nbsp&nbsp<input type='button' class='btn btn-primary btn-xs' onclick=\"window.location.href='text.php?id=$id'\" value='return'></h2>
					</section>
			</div>";
		echo "<div class='col-xs-6 col-sm-4'>
			<div class='embed-responsive embed-responsive-4by3'>
				<video class = 'embed-responsive-item' src='video/$name.mp4' autoplay controls></video>
				Your browser does not support HTML5 video.
			</div>
		</div>";
		if($status==5){
			//if administrator has not saved before, provide reviewer's transcription
			if($saved2==0){
				echo "<div class='row'>
				<div class='col-xs-6 col-sm-4'>
					<form method='post' action='completefinalize.php?id=$id'>
						<div class = 'form-group'>
							<label for='Transcript'>Transcript</label><br>
							<textarea rows='12' cols='50' class = 'form-control' id='inputComments' name='text'>$text2</textarea><br>
							<td><input type='radio' name='finished' value='yes' checked=true></td>finished
							<td><input type='radio' name='finished' value='no'></td>not finished, save it for now<br>
							<input type='submit' value='submit'>  
						</div>
					</form>
				</div><!-- end of textarea div -->";
			//if administrator has saved before, provide administrator's unfinished transcription
			}else{
				echo "<div class='row'>
				<div class='col-xs-6 col-sm-4'>
					<form method='post' action='completefinalize.php?id=$id'>
						<div class = 'form-group'>
							<label for='Transcript'>Transcript</label><br>
							<textarea rows='12' cols='50' class = 'form-control' id='inputComments' name='text'>$text3</textarea><br>
							<td><input type='radio' name='finished' value='yes' checked=true></td>finished
							<td><input type='radio' name='finished' value='no'></td>not finished, save it for now<br>
							<input type='submit' value='submit'>  
						</div>
					</form>
				</div><!-- end of textarea div -->";
			}
		}else{
			echo "<div class='row'>
			<div class='col-xs-6 col-sm-4'>
				you already finalized this transcript
			</div><!-- end of textarea div -->";
		}
		}else{
			echo "sorry,you are not admin";
		}

	
	?>

</div>  <!-- content-container -->


<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
