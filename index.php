<?php
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" text="" href="index2.css">
	<script src="index.js"></script>
</head>
<body>
	<div class="headDiv">
        <img src="sreclogo.jpg" class="sreclogo" alt="Srec Logo">
        <h1>Sri Ramakrishna Engineering College<br><span class="t1">An Autonomous Institution<span></h1>
    </div>
	<div class="wholeDiv2">
			<input type="button" class="initialButton wholeDiv2" name="b1" id="b1" value="Student" onclick=" studentSubmit()" >
			<input type="button" class="initialButton wholeDiv2" name="b2" id="b2" value="Tutor" onclick="tutorSubmit()">
			<input type="button" class="initialButton wholeDiv2" name="b3" id="b3" value="Academic Co-ordinator" onclick="acSubmit()">
			<input type="button" class="initialButton wholeDiv2" name="b4" id="b4" value="Head Of The Departement"
			onclick="hodSubmit()">
		
	</div>
</body>
?>
