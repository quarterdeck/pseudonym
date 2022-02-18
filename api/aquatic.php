<?php
$adjectives = include('words/adjectives.php');
$animals = include('words/aquatic-animals.php');

$pseudonym = join(' ', [
	$adjectives[array_rand($adjectives)],
	$animals[array_rand($animals)],
]);

if ($_GET['slug'] ?? false) {
	echo str_replace(' ', '-', strtolower($pseudonym));
} else {
	echo ucwords($pseudonym);
}
