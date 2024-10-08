<?php

require_once 'slide.php';

$teams = array(
               // Name => (number, number of members, flair)
               'Rattmuffarna'             => array(0, 1),
               'Viktat projektivt rum'    => array(1, 1),
               'Ibsens kusiner'           => array(2, 1),
               'Senaste laget'            => array(3, 1),
               'Katlas kompisar'          => array(4, 1),
               'Sötgötarna'               => array(5, 1),
               'Trial and Error'          => array(6, 1),
               'Shop Dvärg'               => array(7, 1),
               'Suddens bergsmyntor'      => array(8, 1),
               'Puh - Det mörka hotet'    => array(9, 1),
               'Örnen 5'                  => array(10, 1),
               'Enar Åkered'              => array(11, 1),
               '1 till 2 till'            => array(12, 1),
               'Ej i trafik'              => array(13, 1),
               'Blåbärz'                  => array(14, 1),
               'Mit nach seit von Motala' => array(15, 1),
	       'Ingen Aning'              => array(16, 1),
               'Webus Express'            => array(30, 1),
               'Faktiskt Goa Gubbar'      => array(31, 1),
               'Blodbussen'               => array(112, 1),
               'Flexbussen'               => array(9001, 1),
		);
	       
// Blåbärsrebusar - för bakåtkompatibilitet
$bluerebus = array();

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

    // Stjälp
    'S 1' => 'Stjälp 1',
    'S 2' => 'Stjälp 2',
    'S 3' => 'Stjälp 3',
    'S 4' => 'Stjälp 4',
    'S 5' => 'Stjälp 5',
    'S 6' => 'Stjälp 6',
    'S 7' => 'Stjälp 7',
    'S 8' => 'Stjälp 8',
    'S 9' => 'Stjälp 9',
    'S 10' => 'Stjälp 10',
    'S 11' => 'Stjälp 11',
    'S 12' => 'Stjälp 12',

    // Förmiddagspyssel
    'P GRNS' => 'Gränsåldern',
    'P AUTO' => 'Autocorrected',
    'P SJAN' => 'Sjangrer',
    'P CURL' => 'Curlingpysslet',
    'P MUSK' => 'Det logaritmiska musikkrysset',
           
    // Lunchpyssel
    'P GUTE' => 'Gutamålsprumnadn',
           
    // Heldagspyssel
    'P KRYS' => 'Krysslet',
    'P ONNY' => 'Jonny eller Ronny?',
    'P PATE' => 'Patent pending',
    'P SMAR' => 'Smartarte än en pensionär',
    'P VSEN' => 'Vad kommer sen?',
    'P AREA' => 'Areapysslet',
    'P AREN' => 'Arenapysslet',
    'P EART' => 'Earth-pysslet',
    'P GRIS' => 'Grisras eller typsnitt?',
    'P SVEN' => 'Svens pyssel om hajar och annat',
    
    'Stil' => 'Stil och finess',
    'Tid S' => 'Tidsprickar vid Start',
    'Tid L' => 'Tidsprickar vid Lunch',
    'Tid M' => 'Tidsprickar vid Mål',
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
    '*picture*Rebusrally 2019-05:title.jpg',

    'Etapp 1' => array('Tid S', 'R 1', 'P GRNS', 'P AUTO', 'TP 1', 'FP 1'),

    'Etapp 2' => array('R 2', 'P SJAN', 'TP 2', 'FP 2'),
    'Totalt efter Etapp 2' => array('*sumcomp*', 'Etapp 1', 'Etapp 2'),

    'Etapp 3' => array('R 3', 'P CURL', 'P VSEN', 'TP 3', 'FP 3'),
    'Totalt efter Etapp 3' => array('*sumcomp*', 'Totalt efter Etapp 2', 'Etapp 3'),

    'Etapp 4' => array('R 4', '*picture*Det logaritmiska musikkrysset:kryss_hist.png', 'P MUSK', 'TP 4', 'FP 4', 'Tid L'),
    'Totalt efter Etapp 4' => array('*sumcomp*', 'Totalt efter Etapp 3', 'Etapp 4'),

    'Lunch' =>
    array(
          'Stil',
          'P GUTE',
	  '*picture*Rebuspysslet:grenREBU.jpg',
          'S 1', 'S 2', 'S 3', '*solution*S3 T&E', 'S 4', 'S 5', '*solution*S5 fel', 'S 6', 'S 7',
          'S 8', 'S 9', 'S 10', 'S 11', 'S 12', 
          array('*esum*', 'Rebuspysslet totalt', 'S 1', 'S 2', 'S 3', 'S 4', 'S 5',
                'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11', 'S 12')),
    'Totalt efter Lunch' => array('*sumcomp*', 'Totalt efter Etapp 4', 'Lunch'),

    'Etapp 5' => array('R 5', 'P KRYS', 'P AREA', 'TP 5', 'FP 5'),
    'Totalt efter Etapp 5' => array('*sumcomp*', 'Totalt efter Lunch', 'Etapp 5'),

    'Etapp 6' => array('R 6', 'P ONNY', 'P EART', 'TP 6', 'FP 6'), 
    'Totalt efter Etapp 6' => array('*sumcomp*', 'Totalt efter Etapp 5', 'Etapp 6'),

    'Etapp 7' => array('R 7', 'P PATE', 'P GRIS', 'TP 7', 'FP 7'),
    'Totalt efter Etapp 7' => array('*sumcomp*', 'Totalt efter Etapp 6', 'Etapp 7'),

    'Etapp 8' => array('R 8', 'P SMAR', 'P SVEN', 'P AREN', 'TP 8', 'FP 8', 'Tid M'),

    'Plock totalt' =>
    array('*sum*',
          'TP 1', 'TP 2', 'TP 3', 'TP 4', 'TP 5', 'TP 6', 'TP 7', 'TP 8',
          'FP 1', 'FP 2', 'FP 3', 'FP 4', 'FP 5', 'FP 6', 'FP 7', 'FP 8'),

    'Pyssel totalt' =>
    array('*sum*',
         'P GRNS',
         'P AUTO',
         'P SJAN',
         'P CURL',
         'P MUSK',
         'P GUTE',
         'P KRYS',
         'P ONNY',
         'P PATE',
         'P SMAR',
         'P VSEN',
         'P AREA',
         'P AREN',
         'P EART',
         'P GRIS',
         'P SVEN',
	 ),

    'Alla rebusar' =>
    array('*sum*',
          'S 1', 'S 2', 'S 3', 'S 4',
          'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11', 'S 12',
          'R 1', 'R 2', 'R 3', 'R 4',
          'R 5', 'R 6', 'R 7', 'R 8'),
    'Stilpriset' => array('*sum*', 'Stil'),	 

    'Totalt' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8')
    );

$maxPoints =
  array(
         );

$info =
  array(
        'Tid S' => '1 per minut',
        'Tid L' => '1 per minut',
        'Tid M' => '1 per minut, 2 efter 17:45, 4 efter 18:15, 8 efter 18:30',
        'R [0-9]+' => '25 klippt hjälp, 45 klippt nöd, felaktiga kontrollbokstäver 45',
        'S [0-9]+' => '-15 korrekt motiverad lösning',
        'FP [0-9]+' => '10 missat plock, 20 falskt plock',
        'TP [0-9]+' => '5 missat plock, 10 falskt plock'
        );
?>
