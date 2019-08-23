<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Bootstrap core CSS -->
		<link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
      #division1 {
        background-color:black;
		padding:10px;
		margin-bottom:15px;
		width:100%;
		text-align:left;
		border-radius:4px;
		font-size:90%;
		color:#34495e;
      }
	  #division2
	  {
	  position:fixed;
	  bottom:0px;
	  right:15px;
	  text-align:right;
	  }
	  p{
	  color:white;
	  font-size: 1.15em;
	  }
	  a{
		  font-size:30px;
		  color:#2980b9;
		  line-height:50px;
	  }
    </style>
	</head>
	<body>		
		<div id="division2">
			<a role="button" data-toggle="collapse" href="#systrayinfo" aria-expanded="false" aria-controls="systrayinfo">
			<span class="glyphicon glyphicon-dashboard"></span></a>
			<div class="collapse" id="systrayinfo">
			<div id="division1">
			<p>How to use the application</p>
			<iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
			<br/>
			<iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
			</div>
			</div>
		</div>
		
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="library/jquery/jquery.min.js"></script>
		<script src="library/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>