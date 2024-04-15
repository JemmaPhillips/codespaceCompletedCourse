
class User {
    constructor() {
      this.username = ""; 
    };
  
    //setter
    setUsername(username) {
      this.username = username;
    };
  };
  
  
  class Admin extends User {
    constructor() {
      super(); 
    };
  
    expressYourRole() {
      return "Admin";
    };
  
    sayHello() {
      return `Hello admin, ${this.username}`;
    };
  };
  
 //object
  const admin = new Admin();
  
  // set username 
  admin.setUsername("Balthazar");
  
  // say hello
  console.log(admin.sayHello()); 
  