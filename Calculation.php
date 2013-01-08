<?php
class Calculation
{
	public $numbersToNumerals;
	
	public function __construct()
	{
		$this->numbersToNumerals = array(
			0 => array(
				'arabic' => 1000,
				'roman' => 'M'
			),
			1 => array(
				'arabic' => 900,
				'roman' => 'CM'
			),			
			2 => array(
				'arabic' => 500,
				'roman' => 'D'
			),
			3 => array(
				'arabic' => 400,
				'roman' => 'CD'
			),
			4 => array(
				'arabic' => 100,
				'roman' => 'C'
			),
			5 => array(
				'arabic' => 90,
				'roman' => 'XC'
			),
			6 => array(
				'arabic' => 50,
				'roman' => 'L'
			),
			7 => array(
				'arabic' => 40,
				'roman' => 'XV'
			),
			8 => array(
				'arabic' => 10,
				'roman' => 'X'
			),
			9 => array(
				'arabic' => 9,
				'roman' => 'IX'
			),
			10 => array(
				'arabic' => 5,
				'roman' => 'V'
			),
			11 => array(
				'arabic' => 4,
				'roman' => 'IV'
			),
			12 => array(
				'arabic' => 1,
				'roman' => 'I'
			),
		);
	}
	
	public function doCalculation($input, $divider)
	{
		$numeralString = "";
		$multiplier = $input / $this->numbersToNumerals[$divider]['arabic'];
		$remainder =  $input % $this->numbersToNumerals[$divider]['arabic'];
			
		for($i = 1; $i <= $multiplier; $i++)
		{
			echo $this->numbersToNumerals[$divider]['roman'];
		}
				
		if($remainder != 0)
		{
			$divider += 1;
			$this->doCalculation($remainder, $divider);
		}
	}
}
?>