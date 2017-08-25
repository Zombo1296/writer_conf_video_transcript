<?php
echo"<!DOCTYPE html>
<html lang='en'>

<head>
    <!--meta from bootstrap-->
    <!--More detailed and customized web functionalities and layouts are developed by Bohan Zhang and Xu Cao-->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <!--add copywright warning information when user attempts to copy and paste-->
	<!--this part is written by Bohan Zhang-->
	<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'>
	</script>
	<script type='text/javascript'>

		function addLink() {
		var body_element = document.getElementsByTagName('body')[0];
		var selection;
		selection = window.getSelection();
		var undlink = 'https://und.edu/orgs/writers-conference/digital-collection/transcripts/virtual-reading-room.cfm';
		var pagelink = '<br /><br /> Read more at: <a href= '+undlink+'>'+undlink+'</a><br />';
		var cyund = 'Copyright &copy; 2015 University of North Dakota - Grand Forks, ND '; 
		var copytext = selection + pagelink + cyund;
		var newdiv = document.createElement('div');
		newdiv.style.position='absolute';
		newdiv.style.left='-99999px';
		body_element.appendChild(newdiv);
		newdiv.innerHTML = copytext;
		selection.selectAllChildren(newdiv);
		window.setTimeout(function() {
			body_element.removeChild(newdiv);
		},0);
				}
		
        document.oncopy = addLink;
	</script>

    <title>UND Writers Conference Search</title>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>

    <!-- Custom fonts from Bootstrap-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='font-awesome/css/font-awesome.min.css' type='text/css'>

    <!-- plugin CSS From Bootstrap-->
    <link rel='stylesheet' href='css/reset.css'> <!-- CSS reset -->
    <link rel='stylesheet' href='css/animate.min.css' type='text/css'>

    <!-- Custom CSS by Bohan Zhang-->
    <link rel='stylesheet' href='css/creative.css' type='text/css'>
    <script src='js/modernizr.js'></script> <!-- Modernizr -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
        <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
    <![endif]-->

</head>

<body id='page-top'>

    <nav id='mainNav' class='navbar navbar-default navbar-fixed-top'>
        <div class='container-fluid'>
           <!-- condense the navgation bar items for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand page-scroll' href='#page-top'>UND WC</a>
            </div>

            <!-- All navigation bar items -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav navbar-right'>

                 <li>
                        <a class='page-scroll' href='#browse'>Browse</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#search'>Search</a>
                    </li>
                   
                    <li>
                        <a class='page-scroll' href='#contact'>Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--Welcome section-->
    <header>
        <div class='header-content'>
            <div class='header-content-inner'>
                <h1>Welcome</h1>
                <hr>
                <p>The UND Writers Conference Digital Collection</p>
                <a href='#browse' class='btn btn-primary btn-lg page-scroll'>Browse</a>
            </div>
        </div>
    </header>

<!--Browse section-->

<section id='browse'>
 <div class='container'>
      <div class='row'>
<div class='col-xs-12 text-center'>
<p class ='alpha'>
<!--Qucik links to authors' last names alphabetically-->
	<a href='#a'>A&nbsp&nbsp&nbsp</a><a href='#b'>B&nbsp&nbsp&nbsp</a><a href='#c'>C&nbsp&nbsp&nbsp</a>

	<a href='#d'>D&nbsp&nbsp&nbsp</a>

	<a href='#e'>E&nbsp&nbsp&nbsp</a>

	<a href='#f'>F&nbsp&nbsp&nbsp</a>

	<a href='#g'>G&nbsp&nbsp&nbsp</a>

	<a href='#h'>H&nbsp&nbsp&nbsp</a>

	<a href='#i'>I&nbsp&nbsp&nbsp</a>

	<a href='#j'>J&nbsp&nbsp&nbsp</a>

	<a href='#k'>K&nbsp&nbsp&nbsp</a>

	<a href='#l'>L&nbsp&nbsp&nbsp</a>

	<a href='#m'>M&nbsp&nbsp&nbsp</a>

	<a href='#n'>N&nbsp&nbsp&nbsp</a>
	<a href='#o'>O&nbsp&nbsp&nbsp</a>
	<a href='#p'>P&nbsp&nbsp&nbsp</a>

	<a href='#q'>Q&nbsp&nbsp&nbsp</a>

	<a href='#r'>R&nbsp&nbsp&nbsp</a>

	<a href='#s'>S&nbsp&nbsp&nbsp</a>

	<a href='#t'>T&nbsp&nbsp&nbsp</a>
	
	<a href='#u'>U&nbsp&nbsp&nbsp</a>

	<a href='#v'>V&nbsp&nbsp&nbsp</a>

	<a href='#w'>W&nbsp&nbsp&nbsp</a>

	<a href='#x'>X&nbsp&nbsp&nbsp</a>

	<a href='#y'>Y&nbsp&nbsp&nbsp</a>

	<a href='#z'>Z&nbsp&nbsp&nbsp</a>

</p>
</div>
</div>
</div>

     <!--make pics away from left edge-->
    <div class='row gap-left'>
        <!--Divide each row by 3 columns -->              
        <div class='col-md-3'>
            <!--3 parts for each author: Profile pic, Name, transcript links-->
            <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/condit.cfm'><img title = 'Photo Credit: University of North Dakota' src='img/cc.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption'  id ='c'>Cecelia Condit</p>
									<p class = 'link caption'><a>2010 Mind the Gap: Print, New Media, Art -Reading</a></p>
                                    <p class = 'link caption'><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2010-beyond-the-screen.cfm'>2010-Panel: \"Beyond the Screen\"</a></p>
				</div>

			    <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/doty.cfm'><img src='img/md.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='d'>Mark Doty</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/1999-doty.cfm'>1999 Expressing the Sacred -Reading</a></p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2012-doty.cfm'>2012 Humanimal -Reading</a></p>               
                </div>


                <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/amerika.cfm'><img src='img/ma.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='a'>Mark Amerika</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2010-amerika.cfm'>2010 Mind the Gap: Print, New Media, Art -Reading</a></p>
									<p class = 'link caption'><a href = 'https://und.edu/orgs/writers-conference/digital-collection/transcripts/2010-beyond-the-page.cfm'>2010-Panel: \"Beyond the Page\"</a></p>
									<p class = 'link caption'><a href = 'https://und.edu/orgs/writers-conference/digital-collection/transcripts/2010-beyond-the-screen.cfm'>2010-Panel: \"Beyond the Screen\"</a></p>            
                </div>


	    <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/doty.cfm'><img src='img/md.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='d'>Mark Doty</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/1999-doty.cfm'>1999 Expressing the Sacred -Reading</a></p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2012-doty.cfm'>2012 Humanimal -Reading</a></p>               
                </div>

    </div>   <!-- First row div ends-->

<div class='row gap-left'>

  <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/doty.cfm'><img src='img/md.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='d'>Mark Doty</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/1999-doty.cfm'>1999 Expressing the Sacred -Reading</a></p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2012-doty.cfm'>2012 Humanimal -Reading</a></p>               
                </div>


                  <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/doty.cfm'><img src='img/md.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='d'>Mark Doty</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/1999-doty.cfm'>1999 Expressing the Sacred -Reading</a></p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2012-doty.cfm'>2012 Humanimal -Reading</a></p>               
                </div>



                  <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/doty.cfm'><img src='img/md.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='d'>Mark Doty</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/1999-doty.cfm'>1999 Expressing the Sacred -Reading</a></p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2012-doty.cfm'>2012 Humanimal -Reading</a></p>               
                </div>



                  <div class='col-md-3'>		
								
			       <a href = 'https://und.edu/orgs/writers-conference/digital-collection/authors/doty.cfm'><img src='img/md.jpg' height='160' width = '160' class = 'img-rounded'></a>
									<p class='author caption' id ='d'>Mark Doty</p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/1999-doty.cfm'>1999 Expressing the Sacred -Reading</a></p>
									<p class = 'link caption' ><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/2012-doty.cfm'>2012 Humanimal -Reading</a></p>               
                </div>

 </div>   <!-- second row div ends-->


</section>";


//search text input box section
echo"<section class='bg-primary' id='search'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 text-center'>
                 
                    <p class='text-faded'>To search for a phrase, please enclose it in quotation marks(\"\").</p>
                <!-- text box form-->
                <form name='sentMessage' id='contactForm' method='get' action='#myContent' novalidate>
                        <div class='row control-group'>
                            <div class='form-group col-xs-12 floating-label-form-group controls'>
          
                                <input name='searchtext' type='text' class='form-control' id='name'>
                               
                            </div>
                        </div>
    <!-- and or search button-->
      <input class='btn btn-default btn-md' value = '\"And\" search' name='method' type = 'submit' >

       <input class='btn btn-default btn-md' value = '\"OR\" search' name='method' type = 'submit' >

                       
                    </form>
                         </div>
                        </div>
                        </div>
</section>";
//hide search result box 
// href='javascript:toggleDiv(\"myContent\");' onclick='document.getElementById('contactForm').submit()' 
//style='display:none;'

echo "<section id = 'myContent' >
      <div class='row'>
      <div class = 'col-xs-10 col-xs-offset-1'>";  

function replace_a_with_b($matches){
        return str_replace($matches[0], "<b>" . $matches[0] . "</b>", $matches[0]);
    }


if ( $_GET['method'] == '"OR" search'){
$keys = $_GET['searchtext'];
            $keys =trim($keys);
            //remove slashes
            $keys=str_replace(array("\\"),"",$keys);
            
            //matches contains all matched strings which has quotes
            $matches=array();
            //inputs1 contains all items from matches array
            $inputs1=array();
            //inputs2 contains all matched words which doesn't have quotes
            $inputs2=array();
            //matchCounter counts the number of matched strings which has quotes
            $matchCounter=0;
            //find all quoted search strings
            preg_match_all("/\"[^\"]+?\"/x",$keys,$matches);
            foreach($matches as $matches2){
                foreach($matches2 as $match){
                    $match=substr($match,1,strlen($match)-2);
                    $inputs1[$matchCounter]=$match;
                    $matchCounter++;
                    $keys=preg_replace("/\"[^\"]+?\"/x","",$keys);
                }
            }
            
            //if there is an odd number of quotes in the input, remove the last one
            $keys=str_replace(array("\""),"",$keys);
            //replace two or more consecutive spaces with one space
            $keys=preg_replace("/\s{2,}/"," ",$keys);
            //find all search words which don't have quotes
            if($keys!="" and $keys!=" " and $keys!="  "){
                $keys =trim($keys);
                //divide user input into several words
                $inputs2 = explode(" ", $keys);
            }
            $inputs=array_merge($inputs1,$inputs2);


echo "<form method='post' action='index.php'>";

            $table="";
            $table=$table."<table class='table table-hover'>";
            $table=$table."<thead>";
            $table=$table."<tr><th>Title</th>";
            $table=$table."<th>Content</th>";
            $table=$table."<th>Matched words</th></tr>";
            $table=$table."</thead>";

            $command = "grep -E '";
            //counter3 is the order number of search word
            $counter3=0;
            //add every search word into grep commend
            foreach ($inputs as $input) {
                $counter3++;
                if ($counter3 == 1) 
                    $command = $command.$input;
                else 
                    $command = $command."|".$input;
            }
            $command=$command."' -r -i --include=\*.html htmlfiles/";
            //get search result from grep
            $output = shell_exec($command);
            //divide search result
            $matchN = explode("htmlfiles/", $output);
            //counter is the the order number of lines found by grep
            //counter4 is how many sentences have been displayed for a matched file
            //each matched file will have 3 sentences being displayed
            $counter=0;
            $counter4=0;
            //counter for how many matches have been found in a file
            $matchedWords=0;
            //counter for how many matches have been found in all files
            $totalMatchs=0;
            //counter for how many matched files have been found
            $totalFiles=0;
            foreach($matchN as $N){
                if($counter>0){
                    //divide search result into filename and the content of matched line
                    $o1=explode(".html:",$N);
                    //if counter2=0,N1 is the filename, if counter2=1,N1 is the content of matched line
                    $counter2=0;
                    foreach($o1 as $N1){
                        if($counter2==0){
                            if($counter==1){
                                //search the title of matched file
                                $title=shell_exec("grep '<title>.*</title>' -r -i --include=".$N1.".html htmlfiles/");
                                $title2=explode("title>",$title);
                                //print title with hyperlink to the original website
                                $table=$table."<tr><td><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/".$N1.".cfm'>".$title2[1]."</a></td>";
                                //store filename of last matched file
                                $last=$N1;
                            }else{
                                //store filename
                                $N3=$N1;
                            }
                            $counter2++;
                        }else{
                            //remove tabs in search result
                            preg_replace('\t',"",$N1);
                            //remove tags in search result
                            $N1=strip_tags($N1);
                            //make all matched words bold
                            foreach ($inputs as $input) {
                                $N1 = preg_replace_callback("/".preg_quote($input, "/")."/i", "replace_a_with_b", $N1);
                            }
                            if($counter==1){
                                //divide matched line into sentences
                                $N5=explode(".",$N1);
                                foreach ($N5 as $N6){
                                    if($counter4<3){
                                        //if sentence contains b tag and less than 3 sentences have been printed for one file, prepare to add it into table
                                        if(strpos($N6,"<b>")!=FALSE){
                                            $N2=$N2." ...".$N6."... ";
                                            $counter4++;
                                        }
                                    }
                                }
                            }else{
                                //if the current line we are processing belongs to a different file than last line, add all prepared things into table
                                if($N3!==$last){
                                    $table=$table."<td>".$N2."</td>";
                                    $table=$table."<td>".$matchedWords."</td></tr>";
                                    $totalFiles++;
                                    $totalMatchs=$totalMatchs+$matchedWords;
                                    $matchedWords=0;
                                    //after adding things into table, prepare to add title and content of current line into the table
                                    $title=shell_exec("grep '<title>.*</title>' -r -i --include=".$N3.".html htmlfiles/");
                                    $title2=explode("title>",$title);
                                    $table=$table."<tr><td><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/".$N3.".cfm'>".$title2[1]."</a></td>";
                                    $last=$N3;
                                    $N2="";
                                    $counter4=0;
                                    $N5=explode(".",$N1);
                                    foreach ($N5 as $N6){
                                        if($counter4<3){
                                            if(strpos($N6,"<b>")!=FALSE){
                                                $N2=$N2." ...".$N6."... ";
                                                $counter4++;
                                            }
                                        }
                                    }
                                }
                                //if the current line we are processing belongs to a same file as last line, just prepare to add sentences into table
                                elseif($counter4<3){
                                    $N5=explode(".",$N1);
                                    foreach ($N5 as $N6){
                                        if($counter4<3){
                                            if(strpos($N6,"<b>")!=FALSE){
                                                $N2=$N2." ...".$N6."... ";
                                                $counter4++;
                                            }
                                        }
                                    }
                                }
                            }
                            $sposition=0;
                            $sposition=strpos($N1,"<b>",$sposition);
                            //count b tags to calculate matched words
                            while($sposition!=false){
                                $matchedWords++;
                                $sposition++;
                                $sposition=strpos($N1,"<b>",$sposition);
                            }
                        }
                    }
                }
                $counter++;
            }
            //add information of last matched file into table
            $table=$table."<td>".$N2."</td>";
            $table=$table."<td>".$matchedWords."</td></tr>";
            $totalFiles++;
            $totalMatchs=$totalMatchs+$matchedWords;
  
            //it no match was found, make the number of total matched files 0
            if(strlen($output)==0)
                $totalFiles--;
            $table=$table."</table></form>";
            //print number of total matched words and number of matched files
            $statementN  = $totalMatchs." match(es) in ".$totalFiles." file(s)";
            echo "<label>".$statementN."</label>";  
            //print table
            echo $table;
}//end of and search

else if($_GET['method']=='"And" search'){
    $keys = $_GET['searchtext'];
            $keys =trim($keys);
            //remove slashes
            $keys=str_replace(array("\\"),"",$keys);
            
            //matches contains all matched strings which has quotes
            $matches=array();
            //inputs1 contains all items from matches array
            $inputs1=array();
            //inputs2 contains all matched words which doesn't have quotes
            $inputs2=array();
            //matchCounter counts the number of matched strings which has quotes
            $matchCounter=0;
            //find all quoted search strings
            preg_match_all("/\"[^\"]+?\"/x",$keys,$matches);
            foreach($matches as $matches2){
                foreach($matches2 as $match){
                    $match=substr($match,1,strlen($match)-2);
                    $inputs1[$matchCounter]=$match;
                    $matchCounter++;
                    $keys=preg_replace("/\"[^\"]+?\"/x","",$keys);
                }
            }
            
            //if there is an odd number of quotes in the input, remove the last one
            $keys=str_replace(array("\""),"",$keys);
            //replace two or more consecutive spaces with one space
            $keys=preg_replace("/\s{2,}/"," ",$keys);
            //find all search words which don't have quotes
            if($keys!="" and $keys!=" " and $keys!="  "){
                //divide user input into several words
                $keys =trim($keys);
                $inputs2 = explode(" ", $keys);
            }
            $inputs=array_merge($inputs1,$inputs2);
            echo "<form method='post' action='index.php'>";
           
            $table="";
            $table=$table."<table class='table table-hover'>";
            $table=$table."<thead>";
            $table=$table."<tr><th>Title</th>";
            $table=$table."<th>Content</th>";
            $table=$table."<th>Matched words</th></tr>";
            $table=$table."</thead>";

            $command = "grep -E '";
            //counter3 is the order number of search word
            $counter3=0;
            //add every search word into grep commend
            foreach ($inputs as $input) {
                $counter3++;
                if ($counter3 == 1) 
                    $command = $command.$input;
                else 
                    $command = $command."|".$input;
            }
            $command=$command."' -r -i --include=\*.html htmlfiles/";
            $output = shell_exec($command);
            $matchN = explode("files/", $output);
            $counter=0;
            $counter4=0;
            $matchedWords=0;
            $totalMatchs=0;
            $totalFiles=0;
            //N7 is used for storing all matched lines for one matched file
            $N7="";
            foreach($matchN as $N){
                if($counter>0){
                    $o1=explode(".html:",$N);
                    $counter2=0;
                    foreach($o1 as $N1){
                        if($counter2==0){
                            if($counter==1){
                                $title=shell_exec("grep '<title>.*</title>' -r -i --include=".$N1.".html htmlfiles/");
                                $title2=explode("title>",$title);
                                $title3="<tr><td><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/".$N1.".cfm'>".$title2[1]."</a></td>";
                                $last=$N1;
                            }else{
                                $N3=$N1;
                            }
                            $counter2++;
                        }else{
                            preg_replace('\t',"",$N1);
                            $N1=strip_tags($N1);
                            //$N8 is used to store $N1 which hasn't been added b tags
                            $N8=$N1;
                            //make all matched words bold
                            foreach ($inputs as $input) {
                                $N1 = preg_replace_callback("/".preg_quote($input, "/")."/i", "replace_a_with_b", $N1);
                            }
                            if($counter==1){
                                $N7=$N8;
                                $N5=explode(".",$N1);
                                foreach ($N5 as $N6){
                                    if($counter4<3){
                                        if(strpos($N6,"<b>")!=FALSE){
                                            $N2=$N2." ...".$N6."... ";
                                            $counter4++;
                                        }
                                    }
                                }
                            }else{
                                if($N3!==$last){
                                    //$containsAll indicates if the matched file contains all search words
                                    $containsAll=1;
                                    foreach ($inputs as $input) {
                                        if(strstr(strtolower($N7),strtolower($input))){
                                        }else{
                                            $containsAll=0;
                                        }
                                    }
                                    //add matched file into table only if it contains all search words
                                    if($containsAll==1){
                                        $table=$table.$title3;
                                        $table=$table."<td>".$N2."</td>";
                                        $table=$table."<td>".$matchedWords."</td></tr>";
                                        $totalFiles++;
                                        $totalMatchs=$totalMatchs+$matchedWords;
                                    }   
                                    $matchedWords=0;
                                    $title=shell_exec("grep '<title>.*</title>' -r -i --include=".$N3.".html htmlfiles/");
                                    $title2=explode("title>",$title);
                                    $title3="<tr><td><a href='https://und.edu/orgs/writers-conference/digital-collection/transcripts/".$N3.".cfm'>".$title2[1]."</a></td>";
                                    $last=$N3;
                                    $N2="";
                                    $counter4=0;
                                    $N7=$N8;
                                    $N5=explode(".",$N1);
                                    foreach ($N5 as $N6){
                                        if($counter4<3){
                                            if(strpos($N6,"<b>")!=FALSE){
                                                $N2=$N2." ...".$N6."... ";
                                                $counter4++;
                                            }
                                        }
                                    }
                                }
                                else{
                                    $N7=$N7." ".$N8;
                                    if($counter4<3){
                                        $N5=explode(".",$N1);
                                        foreach ($N5 as $N6){
                                            if($counter4<3){
                                                if(strpos($N6,"<b>")!=FALSE){
                                                    $N2=$N2." ...".$N6."... ";
                                                    $counter4++;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            $sposition=0;
                            $sposition=strpos($N1,"<b>",$sposition);
                            while($sposition!=false){
                                $matchedWords++;
                                $sposition++;
                                $sposition=strpos($N1,"<b>",$sposition);
                            }
                        }
                    }
                }
                $counter++;
            }
            //$containsAll indicates if the matched file contains all search words
            $containsAll=1;
            foreach ($inputs as $input) {
                if(strstr(strtolower($N7),strtolower($input))){
                }else
                    $containsAll=0;
            }
            //add matched file into table only if it contains all search words
            if($containsAll==1){
                $table=$table.$title3;
                $table=$table."<td>".$N2."</td>";
                $table=$table."<td>".$matchedWords."</td></tr>";
                $totalFiles++;
                $totalMatchs=$totalMatchs+$matchedWords;
            }
  
            if(strlen($output)==0)
                $totalFiles--;
            $table=$table."</table></form>";
            $statementN  = $totalMatchs." match(es) in ".$totalFiles." file(s)";
            echo "<label>".$statementN."</label>";  
            echo $table;
        }//end of or search


echo"</div>
   </div>
</section>";

//contact section
echo"
    <section id='contact'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 text-center'>
                    <h2 class='section-heading'>Contact Information</h2>
                    <hr class='primary'>
                    <p>
                    <strong>Crystal Alberts</strong><br>
                    <p>Associate Professor of English</p>
                    <p>Director, UND Writers Conference</p>
                    <address>276 Centennial Drive<br>
                    110 Merrifield Hall, Stop 7209<br>
                    Grand Forks, ND 58202<br>
                    </p>

                </div>
                <div class='col-lg-4 col-lg-offset-2 text-center'>
                    <i class='fa fa-phone fa-3x wow bounceIn'></i>
                    <p>701/777-2393</p>
                </div>
                <div class='col-lg-4 text-center'>
                    <i class='fa fa-envelope-o fa-3x wow bounceIn' data-wow-delay='.1s'></i>
                    <p><a href='mailto:your-email@your-domain.com'>crystal.alberts@und.edu</a></p>
                </div>
            </div>
        </div>
    </section>



  


    <!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Bootstrap core JavaScript -->
    <script src='js/bootstrap.min.js'></script>

    <!-- plugin JavaScript from Bootstrap-->
    <script src='js/jquery.easing.min.js'></script>
    <script src='js/jquery.fittext.js'></script>
    <script src='js/wow.min.js'></script>

    <!-- Custom JavaScript By Bohan Zhang and Xu Cao-->
    <script src='js/creative.js'></script>

    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='js/main.js'></script> <!-- Resource jQuery -->

</body>

</html>";

?>
