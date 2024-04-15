class User {
    constructor(firstName, lastName) {
      this.firstName = firstName;
      this.lastName = lastName;
    };
    
    //method
    hello() {
      return `hello, ${this.firstName} ${this.lastName}`;
    };  
  };

  const user1 = new User('John', 'Doe');
  const user2 = new User('Jane', 'Doe');

  console.log(user1.hello());
  console.log(user2.hello());