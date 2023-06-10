<html>
<head>
<meta charset=UTF-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<br>

<center><h1>You did your best Wow!!!</h1></center>
<br>

<center><img src="clap.gif" alt="">


<div class="resultq">
<div id="page-wrap">

<h1>Your Score:</h1>
<?php
$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];

$totalCorrect = 0;
if ($answer1 == "B") { $totalCorrect++; }
if ($answer2 == "B") { $totalCorrect++; }
if ($answer3 == "C") { $totalCorrect++; }
if ($answer4 == "A") { $totalCorrect++; }
if ($answer5 == "A") { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 5 </div>";
?>

</div>
</div>
</body>
</html>