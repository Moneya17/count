<html>
  <center>
    <h1>Character Frequency Count</h1>
     <?php
      $str=$_POST['txtarea'];
      $strArray = count_chars($str,1);
     // $strarr2= str_word_count($str,1)

      foreach ($strArray as $key=>$value)
		{
			echo "The character '".chr($key)."' was found $value time(s)<br>";
		}
 /*$lines_arr = preg_split('/\n|\r/',$str);
$num_newlines = count($lines_arr); 
echo $num_newlines;*/
		echo "Total words are ".(str_word_count($_POST['txtarea']));
		$count=str_word_count($_POST['txtarea'],2);
		$arr = array_count_values($count);
		

       echo "<pre>";
	   print_r($arr);
 
		?>
   </center>
</html>