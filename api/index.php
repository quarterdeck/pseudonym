<?php
$adjectives = include('words/adjectives.php');

$nouns = match($_GET['style'] ?? null){
	'animals' => include('words/animals.php'),
	'aquatic' => include('words/aquatic.php'),
	default => include('words/nouns.php'),
};

$pseudonym = join(' ', [
	$adjectives[array_rand($adjectives)],
	$nouns[array_rand($nouns)],
]);

if ($_GET['slug'] ?? false) {
	echo str_replace(' ', '-', strtolower($pseudonym));
} else {
	echo ucwords($pseudonym);
}
