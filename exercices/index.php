<?php

// Exercice 1

$nb = 42;
echo($nb);

$str = "42";
echo($str);

$nbstr = "$nb";
echo($nbstr);

// Exercice 2

$nb_tab = [1, 2.3, 4, 3.5];
print_r($nb_tab);

$str_tab = ["blabla", "bobo", "lalala"];
print_r($str_tab);

// Exercice 3

$animal = ["species" => 3, "name" => "Sim", "age" => 21];
print_r($animal);

// Exercice 4

$data = 42;
$float = (float) $data;
$str = (string) $float;
print_r($data);
print_r($float);
print_r($str);

// Exercice 5

$animals = ["Chat", "Chien", "Lapin", "Souris"];

for($i = 0; $i < count($animals); $i++)
{
    echo "<br>$animals[$i]<br> ";
}

// Exercice 6

$numbers = [28, 32, 44, -67, 18, 24, -98];
    
foreach($numbers as $negNumber)
{
    if($negNumber < 0)
    {
        echo $negNumber;
    }
}

// Exercice 7

$user = [
    "firstName" => "Barack",
    "lastName" => "Obama"
];

echo "Je suis {$user["firstName"]} {$user["lastName"]}, le 44ème président des USA.";

// Exercice 8

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];

foreach($users as $user)
{
    echo "<br>";
    echo $user["firstName"], $user["lastName"];
    
}

?>