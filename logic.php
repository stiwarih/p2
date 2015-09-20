<?php 

// First get password words

$use_spl_chars = isset( $_POST['use_spl_chards']);
$use_max_words = 1;
if(isset($_POST['use_max_words_select']))
{
	$use_max_words = $_POST['use_max_words_select'];
}else
{
	$use_max_words = 1;
}
// echo $use_max_words;
// var_dump($_POST);

//$mypassword = give_me_words(3);
$mypassword_str = give_me_word_str($use_max_words);

//  var_dump($_POST['use_spl_chards']);
//  var_dump($mypassword);
function give_me_word_str($max_password) 
{
	$mypassword_arr = give_me_words($max_password);
	$mypassword_str = "";
	$separator = "-";
	for($i = 0; $i < $max_password;$i++)
	{
		if($i > 0)
		{
			$mypassword_str = $mypassword_str . $separator. $mypassword_arr[$i];
		} else {
			$mypassword_str = $mypassword_arr[$i];
		}
	}
	return $mypassword_str;
}

function give_me_words($max_password) 
{
	$my_list = array("hello", "world");

	//var_dump($_POST['use_spl_chards']);
	// var_dump($_POST);
	//print_r($_POST);

	// array_push($my_list, "none");
	// var_dump($my_list);

	$file = fopen("resources/words.txt", "r");

	if ($file) {
		while (($line = fgets($file)) !== false) {
			// process the line read.
			//echo  "\"" .($line) . "\",";
			array_push($my_list, rtrim($line));
		}

		fclose($file);
	} else {
		// error opening the file.
	} 
	$max_size = sizeof($my_list);
	// echo $max_size;
	//var_dump($my_list);
	
	$password = array();
	//var_dump($password);

	// print $my_list[6];
	for($i = 0; $i < $max_password;$i++)
	{
		$current= rand(0, $max_size);
		array_push($password, $my_list[$current]);
	}
	//var_dump($password);
	return $password;
}

?>



<?php 
/*
// require('resources/words.php'); 

// phpinfo();
// echo rand(0, 100);
// print $my_word_list;
// $my_list = array("foo", "bar", "hello", "world");
//var_dump($my_list);

$file = fopen("resources/words.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        // process the line read.
		//echo  "\"" .($line) . "\",";
    }

    fclose($file);
} else {
    // error opening the file.
} 
*/
?>