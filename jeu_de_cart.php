<?php
$nb = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'];
$CTCP = ['Carreau', 'Trèfle', 'Coeur', 'Pique'];
$cart52 = [];
$k = 0;
$newCart52 = [];

for ($i = 0; $i < count($CTCP); $i++) {
    for ($j = 0; $j < count($nb); $j++) {
        $cart52[$k] = $CTCP[$i] . $nb[$j];
        $k++;
    }
}


$cartP1 = array_slice($cart52, 0, 26);
$cartP2 = array_slice($cart52, 26);

$j = 0;
for ($i = 0; $i < 26; $i++) {

    $newCart52[$j] = $cartP1[$i];
    $newCart52[$j + 1] = $cartP2[$i];
    $j += 2;
}

$Carreau = array_slice($cart52, 0, 13);
$Trefle = array_slice($cart52, 13, 13);
$Coeur = array_slice($cart52, 26, 13);
$Pique = array_slice($cart52, 39);

$VCarreau = implode(' ', $Carreau);
$VTrefle = implode(' ', $Trefle);
$VCoeur = implode(' ', $Coeur);
$VPique = implode(' ', $Pique);

$arr = [$VCarreau, $VTrefle, $VCoeur, $VPique];

for ($i = 0; $i < 4; $i++) {
    echo $arr[$i] . " " . "<br>" . " ";
    echo  " " . "<br>" . " ";
}
