<html>
	<head>
		<style>	.question {
				color:#000;
				font-style:normal;
				font-weight:400;
				width:400px
			}
			.question div.error {
				margin-top:.6em;
				display:none;
			}
			ul.answers {
				margin-left:0;
				#margin-top:5px;#margin-bottom:4px;
			}
			ul.answers li.answer {
				position:relative;
				list-style:none;
				margin-left:0;
				padding:8px 4px 8px 1px;
				background:none;
				#zoom:1;#margin-bottom:-4px;#padding-bottom:0;
			}
</style>
	</head>
	<body>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/QuizScripts.js"></script>
	<div id="QuizDiv">
	</div>
	<script type="text/javascript">
    $(document).ready(function() {
	    e.preventDefault();

   		LoadQuiz();
			return false;
   	});
   </script>
 </body>
</html>