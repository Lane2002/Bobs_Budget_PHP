# Bobs_Budget_PHP
LEARN PHP
Bob's Budget
Practice everything you’ve learned so far about writing PHP programs.

Tasks
9/9 Complete
Mark the tasks as complete by checking them off
Taxes!
1.
Bob just got a new job and needs help figuring out his budget!

He has a salary, annual expenses, monthly expenses, and weekly expenses. He wants to know how much of his salary he can plan to save over the course of a year.

The offer letter from his job has a salary listed before taxes of 48,150. We have stored this value in $grossSalary.

Where Bob lives, there is a progressive tax system. He pays 12% (keeps 88%) on the first 9,700, 22% (keeps 78%) on the next 29,775, and pays 24% (keeps 76%) on the remainder of his salary. This data is stored in $incomeSegments.

$incomeSegments is an array that contains an array for each income segment with the amount being taxed and the percent that he gets to keep.

Let’s begin calculating Bob’s annual salary after taxes.

Use $incomeSegments to calculate Bob’s $netIncome after this set of taxes.

You should be summing the products of each portion of the taxes. The first portion is 8,536 (9,700 * 0.88).


Stuck? Get a hint
2.
Bob also has a social security tax that is a percentage of his total salary. This amount is stored in $socialSecurity. Subtract this from $netIncome.

Store the annual income after taxes in $annualIncome and print it to the screen.


Stuck? Get a hint
Annual Expenses
3.
Bob has two annual expenses for vacations and car repairs. These are stored in $annualExpenses.

$annualExpenses is an associative array with the keys 'vacations' and 'carRepairs'.

Subtract each of these from $annualIncome and print the resulting amount to the screen.


Stuck? Get a hint
Monthly Expenses
4.
Before deducting Bob’s monthly expenses, determine his $monthlyIncome from the current $annualIncome.

Print this value to the screen.


Stuck? Get a hint
5.
Bob has three monthly expenses. These are stored in $monthlyExpenses with the keys:

'rent'
'utilities'
'healthInsurance'
Deduct these from $monthlyIncome and print the result to the screen.


Stuck? Get a hint
Weekly Expenses
6.
Before deducting Bob’s weekly expenses, determine his $weeklyIncome from the current $monthlyIncome. (assume an average of 4.33 weeks in a month for this exercise)

Print this value to the screen.


Stuck? Get a hint
7.
This time, you will be creating the array with Bob’s $weeklyExpenses. Use the following expenses:

gas: 25
food: 90
entertainment: 47
Create this array.


Stuck? Get a hint
8.
Deduct the weekly expenses from $weeklyIncome and print the result to the screen.


Stuck? Get a hint
Savings!
9.
You’ve deducted all of Bob’s taxes and expenses at this point and have an amount that he is able to save each week in $weeklyIncome.

Multiply this by 52 to determine how much he can save for the year and print it to the screen.
