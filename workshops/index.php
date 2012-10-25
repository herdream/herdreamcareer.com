<?php
$pagetitle="Big Sisters Workshop - Workshops";
$section = "workshops";
include("../include/meta.php");
?>

<body>

<?php include("../include/header.php") ?>

<div class="pagecontent">
	<div id="submaincontent" class="clearfix">
      <div id="tutorialintro">
  			<h1> WORKSHOP<br />
        HTML Hamburger</h1>
		     <p>Description of lesson will be here.</p>
        <h2>Materials</h2>
        <ul id="otherWorshops">
            <li><a href="#">Other Link</a></li>
            <li><a href="#">Other Link</a></li>
        </ul>
        <img id="workshopBadge" src="/assets/img/badge_thumb.jpg" />
        <p><a id="getBadgeLink"  href="#">Get this Badge</a></p>
      </div>
      <div id="videocontainer">
          <div id="videoPlayer">
            video content goes here
          </div>
      </div>
      <div class="clearfix"></div>
		<div id="QuizDiv"></div>

    </div>


    <div id="badges" class="clearfix">
      <h1>Earn Related Badges</h1>
      <ul id="badgesList">
        <li >
          <img src="/assets/img/badge_thumb.jpg" />
					<h2><a href="#">Mockup your shoe collection</a></h2>
            <p>
            <span class="careerArea">
                Career Area
              </span>
              Web, Games
            </p>
        </li>
        <li >
          <img src="/assets/img/badge_thumb.jpg" />
	        <h2><a href="#">Other related badge</a></h2>
          <p>
          <span class="careerArea">
              Career Area
            </span>
            Web, Games
          </p>
        </li>
	  </ul>
	</div>

	<?php include("../include/latestvideos.php") ?>
</div>

<?php include("../include/ads.php") ?>

<?php include("../include/footer.php") ?>




<?php include("../include/scripts.php") ?>
	<script src="/assets/js/QuizScripts.js"></script>
 
<script src="/assets/jwplayer/jwplayer.js" type="text/javascript" ></script>
<script type="text/javascript">
    $(document).ready(function() {
     	jwplayer("videoPlayer").setup({
         modes: [
        { type: 'html5' },
        { type: 'flash', src: '/assets/jwplayer/player.swf' }],
        file: "/assets/jwplayer/video.mp4" ,
        height: 270, 
        width: 480 
     	});
     	
    	$("#getBadgeLink").click(function(){
    	LoadQuiz();
    	return false;
    	}); 	
     
   	});
	
  </script>


</html>
