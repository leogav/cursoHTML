<?php 

$name = "Leonardo";
echo "<p>Meu nome é $name</p>";

$string1 = "<p>Essa é a primeira parte";
$string2 = "de uma frase que acaba agora.</p>";
echo $string1." ".$string2;

$meuNro = 20;
$calculo = $meuNro * 31 / 4 + 5;

echo "O resultado da operação é ".$calculo;

$myBool = true;
echo "<p>Essa frase está correta? ".$myBool."</p>";

$myVar = "name";
echo "<p>".$$myVar."</p>";

$myArray = array(Léo, Pedro, Gustavo, João, Guilherme);
$myArray[] = "Paulo";
print_r($myArray);

echo "<p>".$myArray[0]."</p>";

$outraArray[0] = "Pizza";
$outraArray[1] = "Pastel";
$outraArray[2] = "Lanche";
$outraArray["minhaComidaFavorita"] = "Chocolate";

print_r($outraArray);
echo "<br><br>";

$paisesArray = array("Brasil" => "Portugues", "EUA" => "Ingles", "França" => "Frances", "Italia" => "Italiano");
unset($paisesArray[Brasil]);
print_r($paisesArray);
echo sizeof($paisesArray);
echo "<br><br>";

$myName = "Pedro";
if ($myName == "Leonardo") {
    echo "Oi Leonardo";
} else {
    echo "Oi $myName";
}

echo "<br><br>";
$age = 17;
if ($age >= 18) {
    echo "Você pode assistir a esse filme";
} else {
    echo "Você é muito novo para assistir esse filme";
}

echo "<br><br>";

for ($i = 0; $i <= 10; $i++) {
    echo $i."<br>";
}

echo "<br>";

$familia = array(Léo, Pedro, Gustavo, João, Guilherme);

foreach ($familia as $key => $value) {
    $familia[$key] = $value." Gomes<br>";
    echo "Array item $key é o $value<br>";
}
echo "<br>";


for ($i = 0; $i < sizeof($familia); $i++) {
    echo $familia[$i]." ";
}
echo "<br><br>";

$i = 1;
while ($i <= 10){
    $j = $i * 5;
    echo $j."<br>";
    $i++;
}
echo "<br>";

$nomes = array(Léo, Pedro, Gustavo, João, Guilherme);
$i = 0;
while ($i < sizeof($nomes)){
    echo $nomes[$i]."<br>";
    $i++;
}

?>