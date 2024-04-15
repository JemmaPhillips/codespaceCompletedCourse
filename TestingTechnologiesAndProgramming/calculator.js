class Calculator {
    constructor() {
        this.expression = '';
    }

    append(value) {
        this.expression += value;
        this.updateDisplay();
    }

    clear() {
        this.expression = '';
        this.updateDisplay();
    }

    calculate() {
        
            const result = eval(this.expression);
            this.expression = result.toString();
            this.updateDisplay();
        }
    

    updateDisplay() {
        document.getElementById('display').value = this.expression;
    }
}
