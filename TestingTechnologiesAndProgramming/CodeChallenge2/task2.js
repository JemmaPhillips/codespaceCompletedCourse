class User {
    constructor(firstName, lastName) {
        this._firstName = firstName;
        this._lastName = lastName;
    };
    //getter
    get firstName() {
        return this._firstName;
    };
    //setter
    set firstName(firstName) {
        this._firstName = firstName;
    };
    //getter
    get lastName() {
        return this._lastName;
    };
    //setter
    set lastName(lastName) {
        this._lastName = lastName;
    };
    //say hello
    hello() {
        return 'Hello World!';
    };
};

const user = new User();

user.firstName = 'John';
user.lastName = 'Doe';

console.log(user.hello());
console.log(`My name is ${user.firstName} ${user.lastName}`);
