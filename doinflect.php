#!/usr/bin/php
<?php

require_once "Inflect/Inflect.php";

$inflect = new Inflect();

$wordType = $argv[1];
$case     = $argv[2];
$sentence = base64_decode($argv[3]);

switch ($wordType) {
	case "noun":
		$words    = split(' ', $sentence);
		$words[0] = $inflect->getInflectNoun($words[0], $case);
		print join(' ', $words);
		return 0;
	default:
		die('unknown word type');
}

?>
