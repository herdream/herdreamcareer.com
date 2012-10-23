<?php
$pagetitle="Big Sisters Workshop";
$section = "home";
include("include/meta.php");
?>

<body>

<?php include("include/header.php") ?>

<div class="pagecontent">
	<div id="homeintro" class="clearfix">
  <div id="homeintro_steps">
			<h1>Start Exploring!</h1>
			<ul id="intro123">
      <li id="first">
          <h1>1</h1>
          <h2>Watch Videos</h2>
      </li>
      <div class="contenthover">
          <h3>
              Watch tutorials and create your own unique projects.</h3>
          
      </div>
      <li id="second">
          <h1>2</h1>
          <h2>Discover Mentors</h2>
      </li>
      <div class="contenthover">
          <h3>
              Discover mentors in a variety of fields.</h3>
          
      </div>
      <li id="third">
          <h1>3</h1>
          <h2>Earn Badges</h2>
      </li>
      <div class="contenthover">
          <h3>
              Share badges with friends on your favorite sites.</h3>
          
      </div>
    </ul>
  </div>
  <div id="herocontainer">
		 <img src="assets/img/girls_team.jpg" />
  </div>

	</div>

	<div id="center-workshops" class="clearfix">
		<ul id="oneTwoThreeArticles">
			<li class="first">
				<h2>Watch tutorials and create your own unique projects.</h2>
      <p>Every tutorial makes learning fun, try designing your own shoe closet or building a hamburger with code.
      </p>
      <a href="#">Learn More ></a>

			</li>
    <li class="second">
      <h2>Discover mentors in a variety of fields.</h2>
      <p>Each tutorial is lead by a woman that is currently working in that particular field.
      </p>
      <a href="#">Learn More ></a>
      
    </li>
    <li class="third">
      <h2>Share badges with friends on your favorite sites.</h2>
      <p>Each time you complete a tutorial you will earn a badge. Compete with your friends by posting your badges and try to earn them all.
      </p>
      <a href="#">Learn More ></a>
    </li>

		</ul>
	</div>
	
	<?php include("include/latestvideos.php") ?>

</div>

<?php include("include/ads.php") ?>

<?php include("include/footer.php") ?>

<?php include("include/scripts.php") ?>


</html>
