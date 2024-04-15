// Task 1
let reverseString = name => name.split('').reverse().join('');

console.log(reverseString("John")); 
console.log(reverseString("James")); 

// task 2
let reverseArray = array => array.reverse();

console.log(reverseArray([1, 2, 3, 4, 5])); 
console.log(reverseArray(["I", "like", "Javascript"])); 

// Task3

let items = [
    { item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 }, 
 ];
 
const mostExpensiveItem = (items) => {
    let mostExpensive = items[0];
    for (let i =0; i < items.length; i++){
        if ((items[i].price * items[i].stock) > (mostExpensive.price * mostExpensive.stock)){
            mostExpensive = items[i];
        } 
    };

    return mostExpensive;
};

console.log(mostExpensiveItem(items));

// teachers example
const items = [
    { item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 }, 
 ];

 const mostExpensiveItem = array => {
    //empty object to add the most expensive item
    let mostExpensiveItemObj = {};
    //cost tied up on the most expensive item
    let mostExpensiveItemCost = 0;
    //for loop to loop through the array of items
    for(let i = 0; i < array.length; i++){
        //calculate the cost tied up on a single item
        const costTideupSingleItem = array[i].price * array[i].stock
        //check the most expenside item
        if (costTideupSingleItem > mostExpensiveItemCost){
            mostExpensiveItemCost = costTideupSingleItem;
            mostExpensiveItemObj = array[i];

        }
    }
    return mostExpensiveItemObj;
 };
 console.log(mostExpensiveItem(items));