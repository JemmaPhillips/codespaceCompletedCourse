//---task1---
//user class
class User {
    //class constructor
    constructor(firstName, lastName){
        this.firstName = firstName;
        this.lastName = lastName;
    }

    //hello() method
    hello(){
        console.log(`hello, ${this.firstName} ${this.lastName}`);
    }
}

// create an User instance (object)
const user1 = new User("John", "Doe");

//get user1 first and last name and say hello 
user1.hello();

//create an user instance (object)
const user2 = new User("Jane", "doe");

//get user2 first and lanst name and say hello 
user2.hello();



//---task2--- 
//user class
class User {
    //class constructor
    constructor(firstName, lastName){
        this._firstName = firstName;
        this._lastName = lastName;
    }

    //getter
    get firstName(){
        return this._firstName;
    }

    get lastName(){
        return this._lastName;
    }

    //setters
    set firstName(firstName){
        this._firstName = firstName;

    }

    set lastName(lastName){
        this._lastName
    }

    //hello() method
    hello(){
       return "hello world!";
    }
}

//creat an User instance (object)
const user = new User("John", "Doe");

//show info to the user 
//call hello() method
console.log(user.hello());
//show firstname and last name (get method)
console.log(`My name is ${user.firstName} ${user.lastName}`);

//set a new first and last name (using the set method)
user.firstName = "Jane";
user.lastName = "Doe";

 
//call hello() method
console.log(user.hello());
//show firstname and last name (get method)
console.log(`My name is ${user.firstName} ${user.lastName}`)


//---Task3---
//user class
class User {
    //class constructor
    constructor(){
        //inisialise the userName
        this._userName = "";     
    }

    //set method
    set userName (userName) {
        this._userName = userName;
    }
}

//admin class that inherits from the user class
class Admin extends User {
    // expressYourRole() method
    expressYourRole() {
        return "Admin";
    }

    // sayHello() method
    sayHello() {
        return `Hello admin, ${this._userName}`
    }
}

//create an Admin instance(object)
const admin = new Admin();

//set the username to 'Balthazar'
admin.userName - "Balthazar";

//show info to the user
console.log(admin.sayHello());


//---task 4---
// class constructor
class User {
    constructor() {
      this.numberOfArticles = 0;
      
    }
    
    //get metho
    get numberOfArticles() {
        return this._numberOfArticles;
    }

    //set method
    set numberOfArticles(numberOfArticles){
        this._numberOfArticles = numberOfArticles;
    }

    //calcScores() method
    calcScores(){
        //to be changed in the sub-classes

    }
}

//author class 
class Author extends User {
    //override methons
    calcScores() {
        return this.numberOfArticles * 10 + 20;
        }

}

//editor class
class Editor extends User {
    //override methods
    calcScores() {
        return this.numberOfArticles * 6 + 15;
    }
}

//create an author instance (object)
const author = new Author();

//set the number of articals 
author.numberOfArticles = 8;

//print the authors scores to the user
console.log("Author's scores: " + author.calcScores()); //100

// create an editor instance (object)
const editor = new Editor();

//set the number of the article
editor.numberOfArticles = 15;

//print the editors score to the user
console.log("Editor's scores; " + editor.calcScores()); //105


//---Task 5---
//user class
class User {
    //class constructor
    constructor(userName) {
        //prevent tp create object from this
        if (this.constructor === User){
            throw new TypeError("cannot construct abstract instance")
        }

        this._userName = userName;
    }

    //get method
    get userName () {
        return this._userName;
    }

    //set method
    set userName (userName) {
        this._userName = userName;

    }

    //abstract method 
    stateYourRole() {
        //prevent to be called directly
        throw new Error("you need to implement the method first...")
    }
}

//class admin
class Admin extends User {
    // class constructor
    constructor(userName){
        super(userName);
    }

    //override method
    stateYourRole(){
        return "Admin";

    }

}

//class user
class Viewer extends User {
     // class constructor
     constructor(userName){
        super(userName);
    }
    //override method
    stateYourRole(){
        return "Viewer";

    }

}

//create an admin object
const admin = new Admin("Balthazar");

console.log(admin.userName);
console.log(admin.stateYourRole());

const viewer = new Viewer("Balthazar");
console.log(viewer.userName);
console.log(viewer.stateYourRole());
