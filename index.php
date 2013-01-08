<?php
$foo = array('b', 'a', 'r');
$word = '';
foreach ($foo as $letter)
{
	$word += $letter;
	echo $word;
	echo $letter;
}
exit();
require('Calculation.php');

?>

<form method = "post" action = "#">
	<p> Enter a number</p><input name = "number" type ="text" />
	<input type = "submit" />
</form>

<?php if (isset($_POST['number']))
{
	$input = $_POST['number'];
	$num = new Calculation;
	echo $num->doCalculation($input, 0);
}
else
{

}

echo '<pre>
Roman Numerals
1 = i
5 = v
10 = x
50 = l
100 = c
500 = d
1000 = m </pre>'
?>


