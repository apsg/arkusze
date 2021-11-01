<?php
namespace App\Resulters;

class DSMResulter extends AbstractResulter
{
	protected $data = [
		7 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		8 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		9 => [
			'centyl' => 1,
			'ten'	 => 27,
			'class'  => 'Niski'
		],
		15 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		16 => [
			'centyl' => 2,
			'ten'	 => 30,
			'class'  => 'Niski'
		],
		17 => [
			'centyl' => 3,
			'ten'	 => 31,
			'class'  => 'Niski'
		],
		19 => [
			'centyl' => 4,
			'ten'	 => 32,
			'class'  => 'Niski'
		],
		21 => [
			'centyl' => 4,
			'ten'	 => 33,
			'class'  => 'Niski'
		],
		22 => [
			'centyl' => 5,
			'ten'	 => 34,
			'class'  => 'Niski'
		],
		24 => [
			'centyl' => 7,
			'ten'	 => 35,
			'class'  => 'Niski'
		],
		26 => [
			'centyl' => 8,
			'ten'	 => 36,
			'class'  => 'Niski'
		],
		27 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		29 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		31 => [
			'centyl' => 14,
			'ten'	 => 39,
			'class'  => 'Niski'
		],
		32 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		33 => [
			'centyl' => 18,
			'ten'	 => 41,
			'class'  => 'Przeciętny'
		],
		34 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		36 => [
			'centyl' => 24,
			'ten'	 => 43,
			'class'  => 'Przeciętny'
		],
		37 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		38 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		40 => [
			'centyl' => 34,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		41 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		43 => [
			'centyl' => 42,
			'ten'	 => 48,
			'class'  => 'Przeciętny'
		],
		44 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		45 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		47 => [
			'centyl' => 54,
			'ten'	 => 51,
			'class'  => 'Przeciętny'
		],
		48 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		50 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		51 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		52 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		53 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],
		54 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		55 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		57 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		58 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		59 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		60 => [
			'centyl' => 88,
			'ten'	 => 62,
			'class'  => 'Podwyższony'
		],
		62 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		65 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		67 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		69 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		70 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		71 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		76 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		77 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo Wysoki'
		],
		78 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		79 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo Wysoki'
		],
		82 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo Wysoki'
		],
		83 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		90 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo Wysoki'
		],
		140 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];
}
