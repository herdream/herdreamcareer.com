<?php
$pagetitle="Big Sisters Workshop - Workshops";
$section = "tutorials";
include("../include/meta.php");
?>

<body>

<?php include("../include/header.php") ?>

<div class="pagecontent">
	<div id="submaincontent" class="clearfix">
		<!--<ul id="workshopNav">
     		<li><a href="#" id="webWorkshopNav">Web</a></li>
     		<li><a href="#" id="gameWorkshopNav">Game</a></li>
     		<li><a href="#" id="filmWorkshopNav">Film</a></li>
     	</ul>-->
     	<h1>Tutorials</h1>
     	
     		Proin semper orci in dolor sagittis ornare imperdiet enim volutpat. Curabitur sit 
				amet felis lorem, eget auctor libero. Lorem ipsum dolor sit amet, consectetur 
				adipiscing elit. Nullam ac felis ac lacus condimentum fermentum in id lacus. In hac 
				habitasse platea dictumst.
     	</p>
     	<div id="video_workshops" class="workshopcontainer">
			<ul class="workshopList">
				<li>
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/workshop_hpthumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Build a Yummy Hamburger with HTML</a></h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis odio et justo congue 
					 		aliquet. Mauris dapibus turpis id metus tempor pellentesque.
						</p>
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
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/workshop_hpthumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Design Your Shoe Collection</a></h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis odio et justo congue 
					 		aliquet. Mauris dapibus turpis id metus tempor pellentesque.
						</p>
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
					<div class="workshopTile"><a href="/tutorials/tutorial.php"><img src="/assets/img/workshop_hpthumb.jpg" /></a></div>
					<div class="workshopInfo">
						<h2><a href="/tutorials/tutorial.php">Other Video</a></h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis odio et justo congue 
					 		aliquet. Mauris dapibus turpis id metus tempor pellentesque.
						</p>
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
     	
  	</div>

	
</div>

<?php include("../include/ads.php") ?>

<?php include("../include/footer.php") ?>




<?php include("../include/scripts.php") ?>

<script type="text/javascript">
$(document).ready(function() {
	$('#webWorkshopNav').click(function(event) {
  		event.preventDefault();
  		$('#web_workshops').ScrollTo({
		    duration: 1000,
		    easing: 'linear'
		});
	});
	$('#gameWorkshopNav').click(function(event) {
  		event.preventDefault();
  		$('#game_workshops').ScrollTo({
		    duration: 1000,
		    easing: 'linear'
		});
	});
  	$('#filmWorkshopNav').click(function(event) {
  		event.preventDefault();
  		$('#film_workshops').ScrollTo({
		    duration: 1000,
		    easing: 'linear'
		});
	});
});

</script>

</html>
