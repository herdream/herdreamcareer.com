<?php
$pagetitle="Big Sisters Workshop - Badges";
$section = "badges";
include("../include/meta.php");
?>

<body>

<?php include("../include/header.php") ?>

<div class="pagecontent">
	<div id="submaincontent" class="clearfix">

		<h1>Badges</h1>
		<p>Click any of the badges below for information on how to earn those badges!</p>

     	<div id="web_workshops" class="workshopcontainer">
			<h2>Web</h2>
			<ul class="workshopList">
				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/badge_thumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Build AYummy Hamburger With HTML</a></h2>
						<a href="/tutorials/tutorial.php">Get this Badge!</p></a>
						<div class="workshopCareer">
							<p>
								<span class="careerArea">
								  Career Area
								</span>
								<a href="#">Web</a>, <a href="#">Games</a>
						  	</p>
						</div>
					</div>
				</li>

				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/badge_thumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Design Your Shoe Collection</a></h2>
						<a href="/tutorials/tutorial.php">Get this Badge!</p></a>
						<div class="workshopCareer">
							<p>
								<span class="careerArea">
								  Career Area
								</span>
								<a href="#">Web</a>, <a href="#">Games</a>
						  	</p>
						</div>
					</div>
				</li>
			</ul>
     	</div>
     	<div id="game_workshops" class="workshopcontainer">
			<h2>Game</h2>
			<ul class="workshopList">
				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/badge_thumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Write The Next Angry Birds</a></h2>
						<a href="/tutorials/tutorial.php">Get this Badge!</p></a>
						<div class="workshopCareer">
							<p>
								<span class="careerArea">
								  Career Area
								</span>
								<a href="#">Web</a>, <a href="#">Games</a>
						  	</p>
						</div>
					</div>
				</li>
				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/badge_thumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Learn Advanced 3D Rendering <i>and</i> Raytracing</a></h2>
						<a href="/tutorials/tutorial.php">Get this Badge!</p></a>
						<div class="workshopCareer">
							<p>
								<span class="careerArea">
								  Career Area
								</span>
								<a href="#">Web</a>, <a href="#">Games</a>
						  	</p>
						</div>
					</div>
				</li>
			</ul>
     	</div>
     	<div id="film_workshops" class="workshopcontainer">
			<h2>Film</h2>
			<ul class="workshopList">
				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/badge_thumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Be The Next Hitchcock</a></h2>
						<a href="/tutorials/tutorial.php">Get this Badge!</p></a>
						<div class="workshopCareer">
							<p>
								<span class="careerArea">
								  Career Area
								</span>
								<a href="#">Film</a>, <a href="#">Visual</a>
						  	</p>
						</div>
					</div>
				</li>
				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/badge_thumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Learn The Skills of the Gaffer</a></h2>
						<a href="/tutorials/tutorial.php">Get this Badge!</p></a>
						<div class="workshopCareer">
							<p>
								<span class="careerArea">
								  Career Area
								</span>
								<a href="#">Film</a>, <a href="#">Visual</a>
						  	</p>
						</div>
					</div>
				</li>
			</ul>
     	</div>

     	

  	</div>
  	 <?php include("../include/latestvideos.php") ?>
</div>

<?php include("../include/ads.php") ?>

<?php include("../include/footer.php") ?>

<?php include("../include/scripts.php") ?>

<!-- This is a template that can be used for rendering the bades on screen based on server data.
This is for jsrender, but will easily work with minor tweaks for other engines. -->
<script type="text/x-jsrender" id="badgeItemTemplate">
	<li>
		<div class="workshopTile"><a href="{{:TUTORIAL_LINK}}"><img src="{{:BADGE_IMAGE}}" /></a></div>
		<div class="workshopInfo">
			<h2><a href="{{:TUTORIAL_LINK}}">{{:TUTORIAL_TITLE}}</a></h2>
			<div class="workshopCareer">
				<p>
					<span class="careerArea">
					  Career Area
					</span>
					<a href="#">Web</a>, <a href="#">Games</a>
			  	</p>
			</div>
		</div>
	</li>

</script>

<script type="text/javascript">
$(document).ready(function() {

});
</script>

</html>
