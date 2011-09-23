<?php

require_once 'slide.php';

define('SQLITE_DB', DATAROOT . 'vt2009/db');
define('REBUS_PATH', DATAROOT . 'vt2009/rebusar/');
define('PICTURE_URL', 'vt2009/');
define('PICTURE_PATH', DATAROOT . 'vt2009/');

define('SHORT_NAME', 'vt09');

$teams = array(
    'LySistrate' => (1,5),
    '�set Luhring' => (2,5),
    'RRL f�r Claes Elfsberg' => (3,5),
    'De on�mnbara' => (4,5),
    'Enar �kered' => (5,5),
    'Wolves of the Sea' => (6,5),
    'Puh - Det m�rka hotet' => (7,5),
    'Senaste laget' => (8,5),
    'Trial and error' => (9,5),
    'Bellas Barlast' => (10,5),
    'BR�DTILLVERSAREMARAR' => (11,5),
    'Mobil Kris' => (12,5),
    'Metamorphos' => (13,5),
    'Super-Cirkus' => (14,5),
    'Rattmuffarna' => (15,5),
    'Abrovinkerna' => (16,5)
    );

$events = array(
    // Rebusar
    'R 1' => 'Rebus 1',
    'R 2' => 'Rebus 2',
    'R 3' => 'Rebus 3',
    'R 4' => 'Rebus 4',
    'R 5' => 'Rebus 5',
    'R 6' => 'Rebus 6',
    'R 7' => 'Rebus 7',
    'R 8' => 'Rebus 8',

    // Stj�lp
    'S 1' => 'Stj�lp 1',
    'S 2' => 'Stj�lp 2',
    'S 3' => 'Stj�lp 3',
    'S 4' => 'Stj�lp 4',
    'S 5' => 'Stj�lp 5',
    'S 6' => 'Stj�lp 6',
    'S 7' => 'Stj�lp 7',
    'S 8' => 'Stj�lp 8',
    'S 9' => 'Stj�lp 9',
    'S 10' => 'Stj�lp 10',
    'S 11' => 'Stj�lp 11',
    '�ppReb' => '�ppnat stj�lprebuskuvertet',

    'StjPlk' => 'Stj�lpplock',

    // F�rmiddagspyssel
    'P Kryss' => 'Det knastertorra musikkrysset',
    'P Svenne' => 'Svenssonpysslet',
    'P Klas' => 'Byns stolthet',
    'P Kompis' => 'R�r inte min kompis',

    // Heldagspyssel
    'P Spr�k' => 'Spr�kpysslet',
    'P F�re?' => 'F�re/efter-pysslet',
    'P Djur' => 'Djurverbspysslet',
    'P ��h' => '�stg�tapysslet',
    'P ARapp' => 'Aktuellt eller Rapport',

    // Lunchpyssel
    'P Film' => 'Filmtitlar',
    'P Crap' => 'Scrapbooking',

    // Eftermidddagspyssel
    'P Skit' => 'Skitsnackspysslet',
    'P Brud' => 'Tjejpysslet',
    'P �r?' => 'Vilket-�r-f�ddes-pysslet',
    'P Lag?' => 'Vems-lag-pysslet',

    'Stil' => 'Stil och finess',
    'Tid S' => 'Tidsprickar vid Start',
    'Tid L' => 'Tidsprickar vid Lunch',
    'Tid M' => 'Tidsprickar vid M�l',
    'TP 1V' => 'Tallriksplock 1',
    'TP 1H' => 'Tallriksplock 1H',
    'TP 2V' => 'Tallriksplock 2',
    'TP 2H' => 'Tallriksplock 2H',
    'TP 3V' => 'Tallriksplock 3',
    'TP 3H' => 'Tallriksplock 3H',
    'TP 4V' => 'Tallriksplock 4',
    'TP 4H' => 'Tallriksplock 4H',
    'TP 5V' => 'Tallriksplock 5',
    'TP 5H' => 'Tallriksplock 5H',
    'TP 6V' => 'Tallriksplock 6',
    'TP 6H' => 'Tallriksplock 6H',
    'TP 7V' => 'Tallriksplock 7',
    'TP 7H' => 'Tallriksplock 7H',
    'TP 8V' => 'Tallriksplock 8',
    'TP 8H' => 'Tallriksplock 8H',
    'FP 1V' => 'Fotoplock 1',
    'FP 1H' => 'Fotoplock 1H',
    'FP 2V' => 'Fotoplock 2',
    'FP 2H' => 'Fotoplock 2H',
    'FP 3V' => 'Fotoplock 3',
    'FP 3H' => 'Fotoplock 3H',
    'FP 4V' => 'Fotoplock 4',
    'FP 4H' => 'Fotoplock 4H',
    'FP 5V' => 'Fotoplock 5',
    'FP 5H' => 'Fotoplock 5H',
    'FP 6V' => 'Fotoplock 6',
    'FP 6H' => 'Fotoplock 6H',
    'FP 7V' => 'Fotoplock 7',
    'FP 7H' => 'Fotoplock 7H',
    'FP 8V' => 'Fotoplock 8',
    'FP 8H' => 'Fotoplock 8H',
    '�ppPlk' => '�ppnat stj�lpplockkuvertet'
    );

$parts = array(
    'Etapp 1' => array('Tid S', 'Stil', 'R 1', 'P Kryss', 'TP 1', 'FP 1'),

    'Etapp 2' => array('R 2', 'P Svenne', 'P Spr�k', 'TP 2', 'FP 2'),
    'Totalt efter Etapp 2' => array('*sum*', 'Etapp 1', 'Etapp 2'),

    'Etapp 3' => array('R 3', 'P Klas', 'P F�re?', 'TP 3', 'FP 3'),
    'Totalt efter Etapp 3' => array('*sum*', 'Totalt efter Etapp 2', 'Etapp 3'),

    'Etapp 4' => array('R 4', 'P Kompis', 'P Djur', 'TP 4', 'FP 4', 'Tid L'),
    'Totalt efter Etapp 4' => array('*sum*', 'Totalt efter Etapp 3', 'Etapp 4'),

    'Lunchsummering' => array('P Film', 'P Crap', '�ppPlk', 'StjPlk',
			      new SumSlide('Sj�lpplock totalt', array('StjPlk', '�ppPlk')),
			      '�ppReb',
			      'S 1', 'S 2', 'S 3', 'S 4', 'S 5', 'S 6', 'S 7',
			      'S 8', 'S 9', 'S 10', new SolutionSlide('S', '10senaste'),
			      'S 11', new SolutionSlide('S', '11enar'),
			      new SumSlide('Stj�lprebusar totalt',
					   array('�ppReb', 'S 1', 'S 2', 'S 3', 'S 4',
						 'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11'))),
    'Totalt efter Lunch' => array('*sum*', 'Totalt efter Etapp 4', 'Lunchsummering'),

    'Etapp 5' => array('R 5', 'P Skit', 'P �r?', 'TP 5', 'FP 5'),
    'Totalt efter Etapp 5' => array('*sum*', 'Totalt efter Lunch', 'Etapp 5'),

    'Etapp 6' => array('R 6', 'P Brud', 'P ��h', 'TP 6', 'FP 6'),
    'Totalt efter Etapp 6' => array('*sum*', 'Totalt efter Etapp 5', 'Etapp 6'),

    'Etapp 7' => array('R 7', 'P Lag?', 'P ARapp', 'TP 7', 'FP 7'),
    'Totalt efter Etapp 7' => array('*sum*', 'Totalt efter Etapp 6', 'Etapp 7'),

    'Etapp 8' => array('R 8', 'TP 8', 'FP 8', 'Tid M'),

    'Plock totalt utan stj�lp' => array('*sum*',
					'TP 1', 'TP 2', 'TP 3', 'TP 4', 'TP 5', 'TP 6', 'TP 7', 'TP 8',
					'FP 1', 'FP 2', 'FP 3', 'FP 4', 'FP 5', 'FP 6', 'FP 7', 'FP 8'),
    'Plock totalt' => array('*sum*',
			    'TP 1', 'TP 2', 'TP 3', 'TP 4', 'TP 5', 'TP 6', 'TP 7', 'TP 8',
			    'FP 1', 'FP 2', 'FP 3', 'FP 4', 'FP 5', 'FP 6', 'FP 7', 'FP 8',
			    'StjPlk'),

    'Pyssel totalt' => array('*sum*', 'P Kryss', 'P Svenne', 'P Klas', 'P Kompis', 'P Spr�k', 'P F�re?',
			     'P Djur', 'P ��h', 'P ARapp', 'P Film', 'P Crap', 'P Skit', 'P Brud',
			     'P �r?', 'P Lag?'),
    'Rebusar och stj�lprebusar totalt' => array('*sum*',
						'�ppReb', 'S 1', 'S 2', 'S 3', 'S 4',
						'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11',
						'R 1', 'R 2', 'R 3', 'R 4',
						'R 5', 'R 6', 'R 7', 'R 8'),
    'Totalt' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8')
    );

$maxPoints = array('P Kryss' => 40, 'P Svenne' => 15, 'P Klas' => 14, 'P Kompis' => 18,
		   'P Spr�k' => 20, 'P F�re?' => 17,  'P Djur' => 12, 'P ��h' => 1,
		   'P ARapp' => 18, 'P Film' => 22, 'P Crap' => 15, 'P Skit' => 16,
		   'P Brud' => 10,  'P �r?' => 12, 'P Lag?' => 16);

$info = array();

?>
