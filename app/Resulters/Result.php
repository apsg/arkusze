<?php

namespace App\Resulters;

class Result{
	
	protected $value;
	protected $type;

	public static $rsk = [
		0 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		5 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		6 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		7 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		8 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		9 => [
			'centyl' => 1,
			'ten'	 => 27,
			'class'  => 'Niski'
		],
		10 => [
			'centyl' => 1,
			'ten'	 => 27,
			'class'  => 'Niski'
		],
		11 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		12 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		13 => [
			'centyl' => 2,
			'ten'	 => 30,
			'class'  => 'Niski'
		],
		14 => [
			'centyl' => 3,
			'ten'	 => 31,
			'class'  => 'Niski'
		],
		15 => [
			'centyl' => 4,
			'ten'	 => 32,
			'class'  => 'Niski'
		],
		16 => [
			'centyl' => 4,
			'ten'	 => 33,
			'class'  => 'Niski'
		],
		17 => [
			'centyl' => 5,
			'ten'	 => 34,
			'class'  => 'Niski'
		],
		18 => [
			'centyl' => 7,
			'ten'	 => 35,
			'class'  => 'Niski'
		],
		19 => [
			'centyl' => 7,
			'ten'	 => 35,
			'class'  => 'Niski'
		],
		20 => [
			'centyl' => 8,
			'ten'	 => 36,
			'class'  => 'Niski'
		],
		21 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		22 => [
			'centyl' => 11,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		23 => [
			'centyl' => 14,
			'ten'	 => 39,
			'class'  => 'Niski'
		],
		24 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		25 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		26 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		27 => [
			'centyl' => 18,
			'ten'	 => 41,
			'class'  => 'Przeciętny'
		],
		28 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		29 => [
			'centyl' => 24,
			'ten'	 => 43,
			'class'  => 'Przeciętny'
		],
		30 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		31 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		32 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		33 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		34 => [
			'centyl' => 31,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		35 => [
			'centyl' => 31,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		36 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		37 => [
			'centyl' => 42,
			'ten'	 => 48,
			'class'  => 'Przeciętny'
		],
		38 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		39 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		40 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		41 => [
			'centyl' => 54,
			'ten'	 => 51,
			'class'  => 'Przeciętny'
		],
		42 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		43 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		44 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		45 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		46 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		47 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		48 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],
		49 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],

		50 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		51 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		52 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		53 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		54 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		55 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		56 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		57 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		58 => [
			'centyl' => 86,
			'ten'	 => 61,
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
		61 => [
			'centyl' => 88,
			'ten'	 => 62,
			'class'  => 'Podwyższony'
		],
		62 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		63 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		64 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		65 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		66 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		67 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		68 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		69 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		70 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		71 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		72 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		73 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		74 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		75 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		76 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		77 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		78 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		79 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		80 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		81 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo wysoki'
		],
		82 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo wysoki'
		],
		83 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo wysoki'
		],
		84 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo wysoki'
		],
		85 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo wysoki'
		],
		86 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo wysoki'
		],
		87 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo wysoki'
		],
		88 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo wysoki'
		],
		89 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo wysoki'
		],
		90 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo wysoki'
		],
		91 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo wysoki'
		],
		92 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		93 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		94 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		95 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		96 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		97 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		98 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		99 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		100 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		101 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		102 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo wysoki'
		],
		103 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo wysoki'
		],
	];

	public static $nz = [
		16 => [
			'centyl' => 1,
			'ten'	 => 27,
			'class'  => 'Niski'
		],
		17 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		18 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		19 => [
			'centyl' => 14,
			'ten'	 => 39,
			'class'  => 'Niski'
		],
		20 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		22 => [
			'centyl' => 18,
			'ten'	 => 41,
			'class'  => 'Przeciętny'
		],
		23 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		24 => [
			'centyl' => 24,
			'ten'	 => 43,
			'class'  => 'Przeciętny'
		],
		26 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		27 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		28 => [
			'centyl' => 34,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		30 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		31 => [
			'centyl' => 42,
			'ten'	 => 48,
			'class'  => 'Przeciętny'
		],
		32 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		33 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		35 => [
			'centyl' => 54,
			'ten'	 => 51,
			'class'  => 'Przeciętny'
		],
		36 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		38 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		39 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		40 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		41 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		43 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		44 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		45 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		47 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		48 => [
			'centyl' => 88,
			'ten'	 => 62,
			'class'  => 'Podwyższony'
		],
		50 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		51 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		52 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		53 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		54 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		56 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		57 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		58 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo Wysoki'
		],
		60 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		61 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo Wysoki'
		],
		67 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		68 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo Wysoki'
		],
		69 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo Wysoki'
		],
		92 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];	

	public static $wo = [
		49 => [
			'centyl' => 1,
			'ten'	 => 20,
			'class'  => 'Niski'
		],
		53 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		54 => [
			'centyl' => 1,
			'ten'	 => 24,
			'class'  => 'Niski'
		],
		55 => [
			'centyl' => 1,
			'ten'	 => 26,
			'class'  => 'Niski'
		],
		56 => [
			'centyl' => 1,
			'ten'	 => 27,
			'class'  => 'Niski'
		],
		59 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		60 => [
			'centyl' => 2,
			'ten'	 => 29,
			'class'  => 'Niski'
		],
		61 => [
			'centyl' => 2,
			'ten'	 => 30,
			'class'  => 'Niski'
		],
		62 => [
			'centyl' => 3,
			'ten'	 => 31,
			'class'  => 'Niski'
		],
		63 => [
			'centyl' => 4,
			'ten'	 => 32,
			'class'  => 'Niski'
		],
		65 => [
			'centyl' => 4,
			'ten'	 => 33,
			'class'  => 'Niski'
		],
		67 => [
			'centyl' => 5,
			'ten'	 => 34,
			'class'  => 'Niski'
		],
		71 => [
			'centyl' => 7,
			'ten'	 => 35,
			'class'  => 'Niski'
		],
		75 => [
			'centyl' => 8,
			'ten'	 => 36,
			'class'  => 'Niski'
		],
		77 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		79 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		81 => [
			'centyl' => 14,
			'ten'	 => 39,
			'class'  => 'Niski'
		],
		82 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		84 => [
			'centyl' => 18,
			'ten'	 => 41,
			'class'  => 'Przeciętny'
		],
		86 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		88 => [
			'centyl' => 24,
			'ten'	 => 43,
			'class'  => 'Przeciętny'
		],
		90 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		92 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		94 => [
			'centyl' => 34,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		96 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		97 => [
			'centyl' => 42,
			'ten'	 => 48,
			'class'  => 'Przeciętny'
		],
		99 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		101 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		103 => [
			'centyl' => 54,
			'ten'	 => 51,
			'class'  => 'Przeciętny'
		],
		104 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		106 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		108 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		109 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		111 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],
		112 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		114 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		115 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		116 => [
			'centyl' => 85,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		118 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		121 => [
			'centyl' => 88,
			'ten'	 => 62,
			'class'  => 'Podwyższony'
		],
		123 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		125 => [
			'centyl' => 90,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		126 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		127 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		128 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		130 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		132 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		133 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo Wysoki'
		],
		134 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		136 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo Wysoki'
		],
		137 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo Wysoki'
		],
		142 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		143 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo Wysoki'
		],
		160 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $dsm = [
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

	public static $rr = [
		0 => [
			'centyl' => 1,
			'ten'	 => 24,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 5,
			'ten'	 => 34,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		5 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		6 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		7 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		8 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		10 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		11 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],
		12 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		13 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		14 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		15 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		16 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		17 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		18 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		19 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		20 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		21 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		22 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		23 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo Wysoki'
		],
		27 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo Wysoki'
		],
		28 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		29 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo Wysoki'
		],
		36 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $rd = [
		0 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 2,
			'ten'	 => 30,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 7,
			'ten'	 => 35,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 14,
			'ten'	 => 39,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 24,
			'ten'	 => 43,
			'class'  => 'Przeciętny'
		],
		5 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		6 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		7 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		8 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		10 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		11 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		12 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		13 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo Wysoki'
		],
		14 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		20 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $wse = [
		0 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 1,
			'ten'	 => 27,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 2,
			'ten'	 => 30,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 4,
			'ten'	 => 33,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 8,
			'ten'	 => 36,
			'class'  => 'Niski'
		],
		5 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		6 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		7 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		8 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 34,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		10 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		11 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		12 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		13 => [
			'centyl' => 66,
			'ten'	 => 54,
			'class'  => 'Przeciętny'
		],
		14 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],
		15 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		16 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		17 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		18 => [
			'centyl' => 88,
			'ten'	 => 62,
			'class'  => 'Podwyższony'
		],
		19 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		20 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		21 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		22 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		23 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		24 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		25 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo Wysoki'
		],
		26 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		29 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo Wysoki'
		],
		31 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo Wysoki'
		],
		32 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		42 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo Wysoki'
		],
		48 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $nj = [
		0 => [
			'centyl' => 2,
			'ten'	 => 29,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 5,
			'ten'	 => 34,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		4 => [
			'centyl' => 24,
			'ten'	 => 43,
			'class'  => 'Przeciętny'
		],
		5 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		6 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		7 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		8 => [
			'centyl' => 58,
			'ten'	 => 52,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		10 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		11 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		12 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		13 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		14 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		15 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		16 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		17 => [
			'centyl' => 98,
			'ten'	 => 71,
			'class'  => 'Bardzo Wysoki'
		],
		18 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo Wysoki'
		],
		19 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo Wysoki'
		],
		22 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo Wysoki'
		],
		24 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $st = [
		0 => [
			'centyl' => 1,
			'ten'	 => 20,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 3,
			'ten'	 => 31,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 7,
			'ten'	 => 35,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		5 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		6 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		7 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		8 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		10 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		11 => [
			'centyl' => 73,
			'ten'	 => 56,
			'class'  => 'Przeciętny'
		],
		12 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		13 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		14 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		15 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		16 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		17 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		18 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		19 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		24 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $sz = [
		0 => [
			'centyl' => 1,
			'ten'	 => 20,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 1,
			'ten'	 => 25,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 2,
			'ten'	 => 30,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 4,
			'ten'	 => 32,
			'class'  => 'Niski'
		],
		5 => [
			'centyl' => 4,
			'ten'	 => 33,
			'class'  => 'Niski'
		],
		6 => [
			'centyl' => 8,
			'ten'	 => 36,
			'class'  => 'Niski'
		],
		7 => [
			'centyl' => 12,
			'ten'	 => 38,
			'class'  => 'Niski'
		],
		8 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		10 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		11 => [
			'centyl' => 31,
			'ten'	 => 45,
			'class'  => 'Przeciętny'
		],
		12 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		13 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		14 => [
			'centyl' => 54,
			'ten'	 => 51,
			'class'  => 'Przeciętny'
		],
		15 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		16 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		17 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		18 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		19 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		20 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		21 => [
			'centyl' => 92,
			'ten'	 => 64,
			'class'  => 'Podwyższony'
		],
		22 => [
			'centyl' => 95,
			'ten'	 => 66,
			'class'  => 'Wysoki'
		],
		23 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		24 => [
			'centyl' => 97,
			'ten'	 => 69,
			'class'  => 'Wysoki'
		],
		25 => [
			'centyl' => 99,
			'ten'	 => 73,
			'class'  => 'Bardzo Wysoki'
		],
		26 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		32 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $ws = [
		0 => [
			'centyl' => 3,
			'ten'	 => 31,
			'class'  => 'Niski'
		],
		1 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 18,
			'ten'	 => 41,
			'class'  => 'Przeciętny'
		],
		3 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		4 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		5 => [
			'centyl' => 50,
			'ten'	 => 50,
			'class'  => 'Przeciętny'
		],
		6 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		7 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		8 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		9 => [
			'centyl' => 84,
			'ten'	 => 60,
			'class'  => 'Podwyższony'
		],
		10 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		11 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		12 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		13 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		14 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		16 => [
			'centyl' => 99,
			'ten'	 => 75,
			'class'  => 'Bardzo Wysoki'
		],
		17 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo Wysoki'
		],
		24 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public static $us = [
		1 => [
			'centyl' => 1,
			'ten'	 => 20,
			'class'  => 'Niski'
		],
		2 => [
			'centyl' => 1,
			'ten'	 => 22,
			'class'  => 'Niski'
		],
		3 => [
			'centyl' => 1,
			'ten'	 => 24,
			'class'  => 'Niski'
		],
		4 => [
			'centyl' => 1,
			'ten'	 => 28,
			'class'  => 'Niski'
		],
		5 => [
			'centyl' => 4,
			'ten'	 => 32,
			'class'  => 'Niski'
		],
		6 => [
			'centyl' => 5,
			'ten'	 => 34,
			'class'  => 'Niski'
		],
		7 => [
			'centyl' => 10,
			'ten'	 => 37,
			'class'  => 'Niski'
		],
		8 => [
			'centyl' => 14,
			'ten'	 => 39,
			'class'  => 'Niski'
		],
		9 => [
			'centyl' => 16,
			'ten'	 => 40,
			'class'  => 'Przeciętny'
		],
		10 => [
			'centyl' => 21,
			'ten'	 => 42,
			'class'  => 'Przeciętny'
		],
		11 => [
			'centyl' => 27,
			'ten'	 => 44,
			'class'  => 'Przeciętny'
		],
		12 => [
			'centyl' => 34,
			'ten'	 => 46,
			'class'  => 'Przeciętny'
		],
		13 => [
			'centyl' => 38,
			'ten'	 => 47,
			'class'  => 'Przeciętny'
		],
		14 => [
			'centyl' => 46,
			'ten'	 => 49,
			'class'  => 'Przeciętny'
		],
		15 => [
			'centyl' => 54,
			'ten'	 => 51,
			'class'  => 'Przeciętny'
		],
		16 => [
			'centyl' => 62,
			'ten'	 => 53,
			'class'  => 'Przeciętny'
		],
		17 => [
			'centyl' => 69,
			'ten'	 => 55,
			'class'  => 'Przeciętny'
		],
		18 => [
			'centyl' => 76,
			'ten'	 => 57,
			'class'  => 'Przeciętny'
		],
		19 => [
			'centyl' => 79,
			'ten'	 => 58,
			'class'  => 'Przeciętny'
		],
		20 => [
			'centyl' => 82,
			'ten'	 => 59,
			'class'  => 'Przeciętny'
		],
		21 => [
			'centyl' => 86,
			'ten'	 => 61,
			'class'  => 'Podwyższony'
		],
		22 => [
			'centyl' => 90,
			'ten'	 => 63,
			'class'  => 'Podwyższony'
		],
		23 => [
			'centyl' => 93,
			'ten'	 => 65,
			'class'  => 'Wysoki'
		],
		24 => [
			'centyl' => 96,
			'ten'	 => 67,
			'class'  => 'Wysoki'
		],
		25 => [
			'centyl' => 96,
			'ten'	 => 68,
			'class'  => 'Wysoki'
		],
		26 => [
			'centyl' => 98,
			'ten'	 => 70,
			'class'  => 'Bardzo Wysoki'
		],
		27 => [
			'centyl' => 99,
			'ten'	 => 72,
			'class'  => 'Bardzo Wysoki'
		],
		28 => [
			'centyl' => 99,
			'ten'	 => 74,
			'class'  => 'Bardzo Wysoki'
		],
		29 => [
			'centyl' => 99,
			'ten'	 => 76,
			'class'  => 'Bardzo Wysoki'
		],
		30 => [
			'centyl' => 99,
			'ten'	 => 78,
			'class'  => 'Bardzo Wysoki'
		],
		40 => [
			'centyl' => 99,
			'ten'	 => 80,
			'class'  => 'Bardzo Wysoki'
		],
	];

	public function __construct($value, $type){
		$this->value = $value;
		$this->type = $type;
	}

	public function __get($name){

		switch ($name) {
			case 'raw':
				return $this->value;
			case 'ten':
				return static::$type[$value]['ten'];
			case 'centyl':
				return static::$type[$value]['centyl'];
			case 'class':
				return static::$type[$value]['class'];
		}

	}

}