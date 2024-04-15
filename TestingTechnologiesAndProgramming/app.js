// Instantiate the Calculator class
const calculator = new Calculator();

// Function to initialize event listeners
function initialize() {
    // Get all the number and operator buttons
    const buttons = document.querySelectorAll('.btn');

    // Add click event listeners to each button
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Get the value of the button
            const value = button.value;

            // If the button is 'C', clear the calculator
            if (value === 'C') {
                calculator.clear();
            } else if (value === '=') { // If the button is '=', calculate the result
                calculator.calculate();
            } else { // Otherwise, append the value to the expression
                calculator.append(value);
            }
        });
    });
}

// Call the initialize function when the DOM content is loaded
document.addEventListener('DOMContentLoaded', initialize);
