  	function InitializeClick(){
			$('#NextQuestion').click(function(e){
			  link = $('#NextQuestion').attr("data-link");
				$('#QuizDiv').load(link, function() {
					InitializeClick();
				});
			
				return false;
			 });
			$('#CompleteQuiz').click(function(e){
			  link = $('#CompleteQuiz').attr("data-link");
	
				$('#QuizDiv').load(link, function() {
					InitializeClick();
					$("#CloseQuiz").click(function(){	$('#QuizDiv').slideToggle();});
				});
			
				return false;
			 });
			}
		
		function LoadQuiz(){
			$('#QuizDiv').load('/quiz/QuizQuestion.php?workshopid=1&quizid=1', function() {
				InitializeClick();
				$('#QuizDiv').slideToggle();
			});
		}
		
		

