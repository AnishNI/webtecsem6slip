// Display message using alert box
Alert("Exams are near, have you started preparing for?");

// Accept two numbers from user using prompt and confirm boxes
num1 = prompt("Enter first number:");
num2 = prompt("Enter second number:");
confirmMsg = "Are you sure you want to add ${num1} and ${num2}?";

// Show confirmation message to user using confirm box
confirmResult = confirm(confirmMsg);

// If user confirms, then perform addition and display the result
If (confirmResult)
{
    Num1 = parseInt(num1);
    Num2 = parseInt(num2);
    sum = num1 + num2;
    Alert("The sum of ${num1} and ${num2} is ${sum}.");
}
