<?php
////A soft drink company recently surveyed 12,467 of its customers and found that approximately 14 percent of
///  those surveyed purchase one or more energy drinks per week. Of those customers who purchase energy drinks,
///  approximately 64 percent of them prefer citrus flavored energy drinks.
//
//Write a program that displays the following:
//
//The approximate number of customers in the survey who purchased one or more energy drinks per week
//The approximate number of customers in the survey who prefer citrus flavored energy drinks


$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;

function calculateEnergyDrinkers(int $surveyedAmount, float $purchasedEnergyDrinksAmount) : int
{
    return round($surveyedAmount * $purchasedEnergyDrinksAmount, 0);
}

function calculatePreferCitrus(int $surveyedAmount, float $preferCitrusDrinksAmount) : int
{
    return round($surveyedAmount * $preferCitrusDrinksAmount, 0);
}



echo "Total number of people surveyed: " . $surveyed . PHP_EOL;
echo "Approximately " . calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinks) . " bought at least one energy drink" . PHP_EOL;
echo calculatePreferCitrus($surveyed, $preferCitrusDrinks) . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;
