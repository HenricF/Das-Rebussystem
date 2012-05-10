<?php

require_once 'slide.php';

$teams = array(
               // Name => (number, number of members)	
	       'Risk f�r d�ligt v�glag' => array(1, 1),
	       '�set Luhring'           => array(2, 1),
	       'Knowledge and passion'  => array(3, 1),
	       'Trial & Error'          => array(4, 1),
	       'Enar �kered'            => array(5, 1),
	       'RRL f�r Claes Elfsberg' => array(6, 1),
	       'Ingen Aning'            => array(7, 1),
	       '1 till 2 till'          => array(8, 1),
	       'I minsta laget'         => array(9, 1),
	       'Rattmuffarna'           => array(10,1),
	       'Katlas kompisar'        => array(11,1)
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

    // Heldagspyssel
    'P MUS' => 'Musikkrysset',
    'P BRO' => 'Gissa Brotten',
    'P MAR' => 'Gissa M�rten',
    'P TAT' => 'Gissa T�ten',
    'P HZZ' => 'Uranus Hertz',
    'P TUP' => 'I tuppgropen',

    // F�rmiddagspyssel
    'P ALF' => 'Alfabeten', 
    'P PRO' => 'Pocenten, Helge!',
    'P RUS' => 'Rustika rus',
    'P DOD' => 'D�d eller levande?',
    'P HOP' => 'Skrivihop',

    // Lunchpyssel
    'P GRI' => 'Slicka p� grisen',
    'P TPS' => 'Tipspromenad',

    // Eftermiddagspyssel
    'P STR' => 'Vilken Star Trek-ras?',
    'P FRI' => 'Hockey, hockey',
    'P MAS' => 'Mer hockey',
    'P DIA' => 'Dialektpysslet',
    'P TTM' => 'You talkin\' to me?', 
    'P PYT' => 'Vem �r python',

    // Stj�lppyssel
    'P BRU' => '17 nyanser av brunt',
    'P BOT' => 'Das boot',
    'P TRA' => 'Tr�slaget',
    'P SLO' => 'Hertigd�met �sterg�tland',
    'P SAT' => 'Sattellitter',

    'Stil' => 'Stil och finess',
    'Tid S' => 'Tidsprickar vid Start',
    'Tid L' => 'Tidsprickar vid Lunch',
    'Tid M' => 'Tidsprickar vid M�l',
    'TP 1' => 'Tallriksplock 1',
    'TP 2' => 'Tallriksplock 2',
    'TP 3' => 'Tallriksplock 3',
    'TP 4' => 'Tallriksplock 4',
    'TP 5' => 'Tallriksplock 5',
    'TP 6' => 'Tallriksplock 6',
    'TP 7' => 'Tallriksplock 7',
    'TP 8' => 'Tallriksplock 8',
    'FP 1' => 'Fotoplock 1',
    'FP 2' => 'Fotoplock 2',
    'FP 3' => 'Fotoplock 3',
    'FP 4' => 'Fotoplock 4',
    'FP 5' => 'Fotoplock 5',
    'FP 6' => 'Fotoplock 6',
    'FP 7' => 'Fotoplock 7',
    'FP 8' => 'Fotoplock 8',
    );

$parts = array(
    'Etapp 1' => array('Tid S', 'R 1', 'P ALF', 'P MUS', 'TP 1', 'FP 1'),

    'Etapp 2' => array('R 2', 'P PRO', 'P BRO', 'TP 2', 'FP 2'),
    'Totalt efter Etapp 2' => array('*sum*', 'Etapp 1', 'Etapp 2'),

    'Etapp 3' => array('R 3', 'P RUS', 'P MAR', 'TP 3', 'FP 3'),
    'Totalt efter Etapp 3' => array('*sum*', 'Totalt efter Etapp 2', 'Etapp 3'),

    'Etapp 4' => array('R 4', 'P DOD', 'P HOP', 'TP 4', 'FP 4', 'Tid L'),
    'Totalt efter Etapp 4' => array('*sum*', 'Totalt efter Etapp 3', 'Etapp 4'),

    'Lunch' => 
    array(new PictureSlide("Lunch", "lunch.jpg"),
	  'P GRI', 'P TPS', 'P TAT', 'P HZZ', 'P TUP',
	  'S 1', 'S 2', 'S 3', 'S 4', 'S 5', 'S 6', 'S 7',
	  'S 8', 'S 9', 'S 10', 'S 11',
	  new SumSlide('Stj�lprebusar totalt',
		       array('S 1', 'S 2', 'S 3', 'S 4',
			     'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11'))),
    'Totalt efter Lunch' => array('*sum*', 'Totalt efter Etapp 4', 'Lunchsummering'),

    'Etapp 5' => array('R 5', 'P STR', 'P FRI', 'TP 5', 'FP 5'),
    'Totalt efter Etapp 5' => array('*sum*', 'Totalt efter Lunch', 'Etapp 5'),

    'Etapp 6' => array('R 6', 'P MAS', 'P DIA', 'TP 6', 'FP 6'),
    'Totalt efter Etapp 6' => array('*sum*', 'Totalt efter Etapp 5', 'Etapp 6'),

    'Etapp 7' => array('R 7', 'P TTM', 'P PYT', 'TP 7', 'FP 7'),
    'Totalt efter Etapp 7' => array('*sum*', 'Totalt efter Etapp 6', 'Etapp 7'),

    'Totalt efter stj�lppyssel' => array('*sum*', 'Totalt efter Etapp 7', 'Stj�lppyssel'),

    'Etapp 8' => array('R 8', 'TP 8', 'FP 8', 'Tid M'),

    'Stil',
    
    'Plock totalt inklusive stj�lp' => 
    array('*sum*',
	  'TP 1', 'TP 2', 'TP 3', 'TP 4', 'TP 5', 'TP 6', 'TP 7', 'TP 8',
	  'FP 1', 'FP 2', 'FP 3', 'FP 4', 'FP 5', 'FP 6', 'FP 7', 'FP 8'),

    'Pyssel totalt inklusive stj�lp' => 
    array('*sum*', 
	  'P MUS', 'P BRO', 'P MAR', 'P TAT', 'P HZZ', 'P TUP', 
	  'P ALF', 'P PRO', 'P RUS', 'P DOD', 'P HOP', 
	  'P GRI', 'P TPS', 
	  'P STR', 'P FRI', 'P MAS', 'P DIA', 'P TTM', 'P PYT'),

    'Rebusar och stj�lprebusar totalt' => 
    array('*sum*',
	  'S 1', 'S 2', 'S 3', 'S 4',
	  'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11',
	  'R 1', 'R 2', 'R 3', 'R 4',
	  'R 5', 'R 6', 'R 7', 'R 8'),

    'Totalt' => array('*sum*', 'Totalt efter stj�lppyssel', 'Etapp 8', 'Stil')
    );

$maxPoints = 
  array('P MUS' => 40, 'P BRO' => 20, 'P MAR' => 14, 'P TAT' => 25, 'P HZZ' => 19, 
        'P TUP' => 12, 'P ALF' => 15, 'P PRO' => 15, 'P RUS' => 14, 'P DOD' => 14, 
        'P HOP' => 18, 'P GRI' => 14, 'P TPS' => 13, 'P STR' => 18, 'P FRI' => 14, 
        'P MAS' => 14, 'P DIA' => 19, 'P TTM' => 25, 'P PYT' => 15, 'P BRU' => -17, 
        'P BOT' => -14, 'P TRA' => -18, 'P SLO' => -10, 'P SAT' => -20);

$info = 
  array('P TTM' => '<red>0.5 per fel', 'P GRI' => '<red>2 per fel',
	'P BRU' => '<red>-1 per r�tt',
	'P BOT' => '<red>-1 per r�tt',
	'P TRA' => '<red>-1 per r�tt',
	'P SLO' => '<red>-1 per r�tt',
	'P SAT' => '<red>-0.5 per r�tt',
	'P .*' => '1 per fel',
	'Tid .' => '1 per minut, 2 efter 17:30',
	'R [0-9]+' => '25 klippt hj�lp, 45 klippt n�d, felaktiga kontrollbokst�ver 25',
	'S [0-9]+' => '-10 korrekt motiverad l�sning',
	'FP [0-9]+' => '10 missat plock, 20 falskt plock',
	'TP [0-9]+' => '5 missat plock, 10 falskt plock');
?>
