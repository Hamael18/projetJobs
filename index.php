<?php

function writeSecretSentence(string $PARAMETRE_1, string $PARAMETRE_2): string
{
	return $PARAMETRE_1 . " s'incline face à " . $PARAMETRE_2;
}

echo writeSecretSentence("La pierre", "la feuille");