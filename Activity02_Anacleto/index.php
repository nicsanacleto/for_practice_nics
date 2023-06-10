<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Activity 02</title>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/a076d05399.js"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<nav class="navbar">
<div class="max-width">
<div class="logo"><a href="#">Quiz <span>bee</span></a></div>
<ul class="menu">
<li><a href="#home">Welcome</a></li>
<li><a href="#quizme">Take Quiz</a></li>
</ul>
</div>

</nav>
<!-- home section start-->
<section class="home" id="home">
<div class="max-width">
<div class="home-content">
<div class="text-1">Hello, Welcome to </div>
<div class="text-2">Philippine History Quizbee </div>
<div class="text-3">Ideas And facts about <span>Philippine
History</span> </div>

    </div>
    </div>
</section>
<!-- quiz section start-->
<section class="quizme" id="quizme">
<form action="result.php" method="post" id="quiz">

<div class="max-width">
<h1>Choose the best answer</h1>
<ol>
<h3>
<li>
<h2>The circumstances behind the founding of Manila remain
unclear. However, </br>
it is known that in its early history Manila was ruled from which
nearby settlement that is the oldest-known named settlement in the
Philippines?</h2>
<!-- Tondo-->
<div>
<input type="radio" name="question-1-answers"
id="question-1-answers-A" value="A" />
<label for="question-1-answers-A">A) Macau </label>
</div>
<div>
<input type="radio" name="question-1-answers"
id="question-1-answers-B" value="B" />
<label for="question-1-answers-B">B) Tondo</label>
</div>
<div>
<input type="radio" name="question-1-answers"
id="question-1-answers-C" value="C" />
<label for="question-1-answers-C">C) Tondo</label>
</div>

</li>
</h3>

<br>
<h3>
<li>
<h2>The First Republic of the Philippines was established
during a war. Which one? </h2>
<!-- Philippine-American War -->
<div>
<input type="radio" name="question-2-answers"
id="question-2-answers-A" value="A" />

<label for="question-2-answers-A">A) Spanish-
American War </label>

</div>
<div>
<input type="radio" name="question-2-answers"
id="question-2-answers-B" value="B" />

<label for="question-2-answers-B">B) Philippine-
American War </label>

</div>
<div>
<input type="radio" name="question-2-answers"
id="question-2-answers-C" value="C" />
<label for="question-2-answers-C">C) World War
I</label>
</div>

</li>
</h3>
<br>
<h3>
<li>
<h2>Foreign influences were evident on most aspects of Filipino
culture - the Philippine languages, for example. Now, from which Asian
language do these words came from, 'alam', 'hukom', and 'salamat'?</h2>
<!-- Arabic-->
<div>

<input type="radio" name="question-3-answers"
id="question-3-answers-A" value="A" />

<label for="question-3-answers-A">A) Malayo-
Polynesian </label>

</div>
<div>
<input type="radio" name="question-3-answers"
id="question-3-answers-B" value="B" />
<label for="question-3-answers-B">B) Mandarin
</label>
</div>
<div>
<input type="radio" name="question-3-answers"
id="question-3-answers-C" value="C" />
<label for="question-3-answers-C">C) Arabic</label>
</div>
</li>
</h3>
<br>



<h3>
<li>
<h2>Which of these was a US president during the 'American Era'
in the Philippines?</h2>
<!-- Franklin Roosevelt-->
<div>
<input type="radio" name="question-4-answers"
id="question-4-answers-A" value="A" />
<label for="question-4-answers-A">A) Franklin
Roosevelt </label>
</div>
<div>
<input type="radio" name="question-4-answers"
id="question-4-answers-B" value="B" />
<label for="question-4-answers-B">B) Abraham
Lincoln </label>
</div>
<div>
<input type="radio" name="question-4-answers"
id="question-4-answers-C" value="C" />
<label for="question-4-answers-C">C) George Bush
</label>
</div>
</li>
</h3>
<br>

<br>
<h3>
<li>
<h2> Which of the following former presidents died in a plane
crash?</h2>
<!-- Ramon Magsaysay-->
<div>
<input type="radio" name="question-5-answers"
id="question-5-answers-A" value="A" />
<label for="question-5-answers-A">A) Ramon
Magsaysay </label>
</div>
<div>
<input type="radio" name="question-5-answers"
id="question-5-answers-B" value="B" />
<label for="question-5-answers-B">B) Ferdinand
Marcos </label>
</div>
<div>
<input type="radio" name="question-5-answers"
id="question-5-answers-C" value="C" />

<label for="question-5-answers-C">C) Carlos Garcia
</label>
</div>
</li>
</h3>
<br>



<br>
</ol>
<!--gawin mong bttn to-->

<input type="submit" value="Submit" class="submitbtn" />
</form>
</div>
</section>

</body>
</html>
