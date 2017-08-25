<?php

//Bohan 
//display all video clips and provide link for each clip
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

//get all clip information
$query = "select * from video2";
$result = query_writers_db($query);
echo "
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/styles.css'>
    <title>Bootstrap</title>
</head>
<body>";

echo"
<div class='content container'>
    <div class='row'>
        <section class='col-sm-12'>
            <h2>Videos</h2>
        </section>
    </div>

    <div class='row'>";
	//display video clip names, screenshots, links,descriptions
	while ($item = $result->fetch_assoc()) {
       echo "<tr>";
       $name = $item[name];
       $status = $item[status];
	   $description = $item[description];
	   $id1=$item[ID1];
	   $id2=$item[ID2];
       echo"<div class='col-xs-6 col-sm-4'>
            <div class = 'overlaypic'>";
		//display progress information according to status attribute
	   if($status==1){
		   echo "<img class = 'img-responsive' src='video/$name.jpg'>
                <span class='label label-default'>Needs Transcribing</span>";
	   }else if ($status==2){
		   echo "<img class = 'img-responsive' src='video/$name.jpg'>
	       <span class='label label-primary'>Transcribing</span>";
	   }else if ($status==3){
           echo "<img class = 'img-responsive' src='video/$name.jpg'>
           <span class='label label-warning'>Needs Reviewing</span>";
        }else if ($status==4){
           echo "<img class = 'img-responsive' src='video/$name.jpg'>
           <span class='label label-info'>Reviewing</span>";
       }else{
		   echo "<img class = 'img-responsive' src='video/$name.jpg'>
                <span class='label label-success'>Finished</span>";
	   }
	   echo "</div>";
	   echo "<a href='video.php?id1=$id1&id2=$id2'>$name</a>";
	   echo "<p>$description</p>";
	   echo "</div>";
    }
   
echo"</div><!-- content container -->


<script src='js/jquery-2.2.0.min.js'></script>
<script src='js/script.js'></script>
</body>
</html>";
?>
