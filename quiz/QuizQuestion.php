<html>
<head>
<style>
	.question{color:#000;font-style:normal;font-weight:400;width:400px}
.question div.error{margin-top:.6em;display:none;}
ul.answers{margin-left:0;#margin-top:5px;#margin-bottom:4px;}
ul.answers li.answer{position:relative;list-style:none;margin-left:0;padding:8px 4px 8px 1px;background:none;#zoom:1;#margin-bottom:-4px;#padding-bottom:0;}
	
</style>    
</head>	
<body>
	 
<?php
$workshopID = $_GET["workshopid"];
$quizID = $_GET["quizid"];
$questionSeq = $_GET["questionSeq"];
$questions = array();
if($workshopID==null) $workshopID = 1;
if($quizID==null) $quizID = 1;
if($questionSeq==null) $questionSeq = 1;

$quizPath = "";
$quizAnswer = "";
$nextQuestion = null;
$badgeImage = null;
$badgeName = null;

mysql_connect("localhost", "her", "her") or die (mysql_error ());
mysql_select_db("herideasinmotion") or die(mysql_error());
	$strSQL = " SELECT * 
				FROM Workshop W
 				inner join WorkshopQuiz WQ on W.ID = WQ.WorkshopID
 				inner join Quiz Q on Q.ID = WQ.QuizID
 				inner join QuizQuestion QQ on QQ.QuizID = Q.ID
 				inner join Question QU on QU.ID = QQ.QuestionID 
 				inner join Badge B on B.ID = Q.BadgeID 
 				where W.ID = " . $workshopID  . " and Q.ID =" . $quizID ;
				
	
	$rs = mysql_query($strSQL ." and QuestionSeq = " . $questionSeq);
	while($row = mysql_fetch_array($rs)) {
		//array_push($questions,array($row['QuizID'],$row['QuizSeq'],$row['QuestionID'],$row['QuestionSeq'],$row['Path'],$row['Answer']));
		$quizPath = $row['Path'] ; 
		$quizAnswer = $row['Answer'] ; 
		$badgeImage = $row['Image'] ;
		$badgeName = $row['BadgeName'] ;
		$completePath = $row['CompletePath'] ;
	}
	
	$rs = mysql_query($strSQL . " and QuestionSeq = " . ($questionSeq+1));
	while($row = mysql_fetch_array($rs)) {
		//array_push($questions,array($row['QuizID'],$row['QuizSeq'],$row['QuestionID'],$row['QuestionSeq'],$row['Path'],$row['Answer']));
		$nextQuestion = $row['QuestionSeq'] ; 
	}
	if($nextQuestion!=null){
 		$nextQuestionUrl = "/quiz/QuizQuestion?workshopid=".$workshopID."&quizid=".$quizID."&questionSeq=".$nextQuestion;
    }

    mysql_close();

	


?>
	<?php include($quizPath)  ?> 
<?php if($nextQuestionUrl!=null) {?>
 <a href="<?php echo $nextQuestionUrl ?>" >Next Question </a>
<?php }  else {?>
Congrats !!! Quiz Completed  <br>
<a href="<?php echo $completePath ?>">Claim your Badge Here</a>
<?php }   ?>
</body>	
</html>