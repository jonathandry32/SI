<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('formater')){
	function formater($nombre){
		$one=str_split($nombre);
		$count=0;
		$ordre=null;
		$desordre=null;
		for ($i=count($one)-1; $i >= 0; $i--) { 
			if ($count%3==0&&$count!=0) {
				$desordre=$desordre.'.';
			}
			$count++;
			$desordre=$desordre.$one[$i];
		}
		$two=str_split($desordre);
		for ($j=count($two)-1; $j >= 0; $j--) { 
			$ordre=$ordre.$two[$j];
		}
		$result=$ordre.' Ariary';
		return $result;
	}
}
?>