#!/usr/bin/php
<?php

require_once "Inflect/Inflect.php";

$inflect = new Inflect();

$wordType = $argv[1];
$case     = $argv[2];

$sentence = @base64_decode($argv[3]);
if (strlen($sentence) <= 0) {
	$sentence = file_get_contents("php://stdin");
}

switch ($wordType) {
	case "noun":
		/*
		$words    = split(' ', $sentence);
		$words[0] = $inflect->getInflectNoun($words[0], $case);
		print join(' ', $words);*/
		print $inflect->getInflectNoun($sentence, $case);
		return 0;
	default:
		die('unknown word type');
}

?>
