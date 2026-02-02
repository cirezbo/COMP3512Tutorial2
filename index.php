<html>

<?php

//Exercise 1
function equalTo($value_1, $value_2)
{
    if ($value_1 | $value_2 == 50) {
        return true;
    } elseif ($value_1 + $value_2 == 50) {
        return true;
    } else {
        return false;
    }
}

$example1 = equalTo(50, 15);
$example2 = equalTo(0, 0);
$example3 = equalTo(25, 25);


//Exercise 2

$countries2 = ["China", "Brazil", "Ethiopia"];
count($countries2);

//For Loop

echo "<ul>";
for ($i = 0; $i < count($countries2); $i++) {
    echo "<li>" . $countries2[$i] . "</li>";
}
echo "</ul>";


//While Loop
$counter = 0;

echo "<ul>";
while ($counter < count($countries2)) {
    echo "<li>" . $countries2[$counter] . "</li>";
    $counter++;
}

echo "</ul>";


//Foreach Loop

echo "<ul>";
foreach ($countries2 as $country) {
    echo "<li>" . $country . "</li>";

}
echo "</ul>";

$countries2[3] = "Canada";


//Exercise 3

$countries3 = [ 
  ["India", "New Delhi"], 
  ["Egypt", "Cairo"], 
  ["Spain", "Madrid"] 
];


//Foreach Loop
echo "<ul>";

foreach ($countries3 as $country) {
    echo "<li>" . $country[0] . "</li>";

}
echo "</ul>";

//For Loop
echo "<ul>";

for ($i = 0; $i < count($countries3); $i++) {
    echo "<li>" . $countries3[$i][0] . "</li>";
}

echo "</ul>";


//Exercise 4
$countries4 = [ 
  ["ISO"=>"CA","name"=>"Canada","continent"=>"NA"], 
  ["ISO"=>"FR","name"=>"France","continent"=>"EU"], 
  ["ISO"=>"AT","name"=>"Austria","continent"=>"EU"] 
];

function printCountries($countries4){

    echo "<ul>";
    foreach ($countries4 as $country) {

        if ($country['continent'] == 'EU') {
            echo "<li><strong>" . $country['name'] . "</strong></li>";
        } else {
            echo "<li>" . $country['name'] . "</li>";
        }


    }
    echo "</ul>";

}

echo printCountries($countries4); //just to see it in browser


//Exercise 6
$countries5 = [ 
  "CA" => ["name"=>"Canada", "capital"=>"Ottawa"], 
  "FR" => ["name"=>"France", "capital"=>"Paris"], 
  "TR" => ["name"=>"Turkey", "capital"=>"Ankara"] 
];





?>
</html>