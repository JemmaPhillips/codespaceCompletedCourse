// Q1
let greet = name => "Hi "  + name + "!";

console.log(greet("John")); // returns Hi john!
console.log(greet("James")); // returns Hi James!

// Q2
 let isEven = num => num % 2 === 0; 

console.log(isEven(4));  //is true
console.log(isEven(5)); // is false

// Q3
  let counterFunc = counter => {
    if (counter > 100) {
        counter = 0;
      } else {
        counter++;
      }
      return counter;
    };    
    console.log(counterFunc(99));
    console.log(counterFunc(102));
     
// Q4
let nameAge = (name, age) => {

    console.log("Hello " + name);
    console.log("You are " + age + " years old");
};

nameAge("James",25);

// Q5
let printOnly = () => {
    console.log("printing");
  };

printOnly();

// Q6
let sum = (num1, num2) => {
    return num1 + num2
};

console.log(sum(1,1));