<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// annual salary
$net_income = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);
echo $net_income;
echo "\n";
echo $socialSecurity;
echo "\n";
// annual income after taxes
$annualIncome = $net_income - $socialSecurity;

echo ("\nAnnual income after taxes is: $annualIncome" );
// Subtract annual expenses for vacationes and car repairs:
echo "\n";
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo ("\nAnnual income after subtracting annual expenses for vacationes and car repairs is: $annualIncome" );
echo "\n";
//monthly income of Bob
$monthlyIncome = round($annualIncome / 12, 2);
echo ("\nMonthly income is: $monthlyIncome" );

// Monthly income after deducting monthly expenses for Bob
$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];
echo "\n";
echo ("\nMonthly income after deducting monthly expenses for Bob is: $monthlyIncome" );

//Asumme weekly income with avg 4.33 weeks in a month
$weeklyIncome = round($monthlyIncome / 4.33,2);
echo "\n";
echo ("\nWeekly income for Bob is: $weeklyIncome" );

//weekly expenses for mr. Bob
$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];
// print_r($weeklyExpenses);

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\n";
echo ("\nRemaining weekly income for Bob is: $weeklyIncome" );

//Annual savings potential of Bob ( remaining weekly income * 52 weeks)

$annualSavingsPotential = $weeklyIncome * 52;
echo "\n";
echo ("\nAnnual savings potential of Bob is: $annualSavingsPotential" );