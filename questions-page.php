<?php
  include "header.php";
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>You Choose | Survey</title>
   <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
<div class="survey">
	<h2 class="policy-topic">Issue X</h2>
	<p class="question">Q3. Do you think Nigeria should diversify her source of revenue?</p>
	<button>Previous Question</button>
	<button>Skip this</button>
	<div>
		<form>
			<input type="radio" name="answer" value="Agree">Agree
			<input type="radio" name="answer" value="Neutral">Neutral
			<input type="radio" name="answer" value="Disagree">Disagree
		</form>
	</div>
</div>
<?php include ('footer.php'); ?>