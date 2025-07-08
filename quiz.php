<?php

$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];
$reponses = [1, 2, 3, 1, 3];

$score = 0;


echo "###################################################\n";
echo "######## Qui veux gagner des millions ?! ##########\n";
echo "###################################################\n";
echo "Score initial : 0\n";
echo "###################################################\n";
echo "\n";

for ($i = 0; $i < count($questions); $i++) {
    echo "\n";
    echo $questions[$i] . "\n";
    $rep = trim(fgets(STDIN));
    if ($rep == $reponses[$i]) {
        echo "\n";
        echo "Bien joué !\n";
        $score = $score + 10;
        echo "\n";
        echo "Ton score augmente de 10\n";
        echo "\n";
        echo "###################################################\n";
        echo "Score : $score\n";
        echo "###################################################\n";
    } else {
        echo "Mauvaise réponse !\n\n";
        echo "\n";
        echo "###################################################\n";
        echo "Score : $score\n";
        echo "###################################################\n";
        echo "\n";
    }
}

echo "C'est fini ! \n";

$pourcentage = $score / 50 * 100;

echo "Pourcentage de bonnes réponses : $pourcentage % \n";
if ($pourcentage >= 50) {
    echo "###################################################\n";
    echo "Score final : $score / 50 \n";
    echo "###################################################\n";
} else {
    echo "\n";
    echo "#################### GAME OVER ####################\n";
}

echo "\n";
echo "Bien joué tu as gagné des millions !\n";

