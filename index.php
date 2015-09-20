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
					<option value="1" <?php if($use_max_words == '1'){echo("selected");}?> >1</option>
					<option value="2" <?php if($use_max_words == '2'){echo("selected");}?>>2</option>
					<option value="3" <?php if($use_max_words == '3'){echo("selected");}?> >3</option>
					<option value="4" <?php if($use_max_words == '4'){echo("selected");}?> >4</option>
					<option value="5" <?php if($use_max_words == '5'){echo("selected");}?> >5</option>
					<option value="6" <?php if($use_max_words == '6'){echo("selected");}?> >6</option>
					<option value="7" <?php if($use_max_words == '7'){echo("selected");}?> >7</option>
					<option value="8" <?php if($use_max_words == '8'){echo("selected");}?> >8</option>
					<option value="9" <?php if($use_max_words == '9'){echo("selected");}?> >9</option>
					<option value="10" <?php if($use_max_words == '10'){echo("selected");}?> >10</option>
					<option value="11" <?php if($use_max_words == '11'){echo("selected");}?> >11</option>
					<option value="12" <?php if($use_max_words == '12'){echo("selected");}?> >12</option>
				</select>
			</td>
			<br>
	<tr>
        <td>
			<label for="use_spl_chards">Use special charatcers</label>
			<td><input type="checkbox" name="use_spl_chards" value="splChars" <?php if($use_spl_chars == 1){echo("checked");}?> ></td>
			<br>
	    </td>
    </tr>
	<tr>
        <td>
			<label for="use_number">Use Numbers</label>
			<td><input type="checkbox" name="use_number" value="useNumber" <?php if($use_number == 1){echo("checked");}?> ></td>
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
		