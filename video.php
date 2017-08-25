<!DOCTYPE html>
<?php
	
	//Bohan
	//display video clip and allow user to create or edit transcription
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
		$id1 = $_GET["id1"];
		$id2 = $_GET["id2"];
		$query = "select name,status,text,text2,userID1,userID2,saved from video2 where id1 = $id1 and id2 = $id2";
		$result = query_writers_db($query);
		$item = $result->fetch_assoc();
		$name=$item[name];
		$status=$item[status];
		$text=$item[text];
		$text2=$item[text2];
		$userID=$user['id'];
		$userID1=$item[userID1];
		$userID2=$item[userID2];
		$saved=$item[saved];
		echo "<div class='content container'>
				<div class='row'>
					<section class='col-sm-12'>
						<h2>$name</h2>
					</section>
				<td><input type='button' onclick=\"window.location.href='home.php'\" value='return'></td>
			</div>";
		echo "<div class='col-xs-6 col-sm-4'>
			<div class='embed-responsive embed-responsive-4by3'>
				<video class = 'embed-responsive-item' src='video/$name.mp4' autoplay controls></video>
				Your browser does not support HTML5 video.
			</div>
		</div>";
		//if status is transcribing, allow transcriber to edit the transcription
		if($status==2){
			if($userID==$userID1){
				echo "<div class='row'>
				<div class='col-xs-6 col-sm-4'>
					<form method='post' action='completetrans.php?id1=$id1&id2=$id2'>
						<div class = 'form-group'>
							<label for='Transcript'>Transcript</label><br>
							<textarea class = 'form-control' id='inputComments' name='text'>$text</textarea><br>
							<td><input type='radio' name='finished' value='yes' checked=true></td>finished
							<td><input type='radio' name='finished' value='no'></td>not finished, save it for now<br>
							<input type='submit' value='submit'>  
						</div>
					</form>
				</div><!-- end of textarea div -->";
			}else{
				echo "<div class='row'>
					<div class='col-xs-6 col-sm-4'>
					Sorry someone else is already working on this footage
					</div><!-- end of textarea div -->";
			}
		//if the status is reviewing, allow reviewr to edit transcription
		}else if ($status==4){
			if($userID==$userID2){
				//if reviewer has not saved before, provide transcriber's transcription
				if($saved==0){
					echo "<div class='row'>
					<div class='col-xs-6 col-sm-4'>
						<form method='post' action='completereview.php?id1=$id1&id2=$id2'>
							<div class = 'form-group'>
								<label for='Transcript'>Transcript</label><br>
								<textarea class = 'form-control' id='inputComments' name='text'>$text</textarea><br>
								<td><input type='radio' name='finished' value='yes' checked=true></td>finished
								<td><input type='radio' name='finished' value='no'></td>not finished, save it for now<br>
								<input type='submit' value='submit'>  
							</div>
						</form>
					</div><!-- end of textarea div -->";
				//if reviewer has saved before, provide reviewer's unfinished transcription
				}else{
					echo "<div class='row'>
					<div class='col-xs-6 col-sm-4'>
						<form method='post' action='completereview.php?id1=$id1&id2=$id2'>
							<div class = 'form-group'>
								<label for='Transcript'>Transcript</label><br>
								<textarea class = 'form-control' id='inputComments' name='text'>$text2</textarea><br>
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
					Sorry someone else is already working on this footage
					</div><!-- end of textarea div -->";
			}
		//if status is needs transcribing, allow one user to sign up for transcribing
		}else if ($status==1){
			echo "<div class='row'>
			<div class='col-xs-6 col-sm-4'>
				<form method='post' action='completeregi.php?id1=$id1&id2=$id2'>
					<div class = 'form-group'>
						<input type='submit' value='transcribe for this footage'>  
					</div>
				</form>
			</div><!-- end of textarea div -->";
		//if status is needs review, allow one user to sign up for review
		}else if ($status==3){
			if($userID==$userID1){
				echo "<div class='row'>
					<div class='col-xs-6 col-sm-4'>
					Thank you for volunteering! Another volunteer will do the review
					</div><!-- end of textarea div -->";
			}else{
				echo "<div class='row'>
				<div class='col-xs-6 col-sm-4'>
					<form method='post' action='completeregi2.php?id1=$id1&id2=$id2'>
						<div class = 'form-group'>
							<input type='submit' value='review the transcript'>  
						</div>
					</form>
				</div><!-- end of textarea div -->";
			}
		//if status is completed or finalized, don't allow any user to edit transcription
		}else{
			echo "<div class='row'>
			<div class='col-xs-6 col-sm-4'>
				The transcript of this footage is completed
			</div><!-- end of textarea div -->";
		}

	
	?>

</div>  <!-- content-container -->


<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
