<?php
$adjectives = include('words/adjectives.php');
$nouns = include('words/nouns.php');

$pseudonym = join(' ', [
	$adjectives[array_rand($adjectives)],
	$nouns[array_rand($nouns)],
]);

if ($_GET['slug'] ?? false) {
	echo str_replace(' ', '-', strtolower($pseudonym));
} else {
	echo ucwords($pseudonym);
}
