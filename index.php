<html>
<head>
<title>Sanjay Tiwari, P2: Password Generator, Fall 2015</title>

<?php require('logic.php'); ?>
	<style>
		.password {
			color:#ea0;
		}
	</style>
</head>

<body align=center>
<h1>Random Password Generator</h1>
	
<h2> <p class='password'> <?php print $mypassword_str; ?> </p></h2>
		
<form action="index.php" method="POST" align=center id="my_form">
<table align=center>
    <tr>
        <td>
		
            <label for="use_max_words">Max words</label>
            <td>
				<!-- input type="text" name="use_max_words" value="MaxWords" form="my_form" -->
				<select name="use_max_words_select">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</td>
			<br>
	<tr>
        <td>
			<label for="use_spl_chards">Use special charatcers</label>
			<td><input type="checkbox" name="use_spl_chards" value="splChars"></td>
			<br>
	    </td>
    </tr>
	<tr>
        <td>
			<label for="use_number">Use Numbers</label>
			<td><input type="checkbox" name="use_number" value="useNumber"></td>
			<br>
	    </td>
    </tr>
	<tr>
        <td>
			<input type="submit" value="Generate another Random Password">		
        </td>
    </tr>
</table>
  
</form>	
<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>
</body>
</html>
		