class User {
    constructor() {
        this._username = '';
    };

    // getter
    get username() {
        return this._username;
    };

    // setter
    set username(value) {
        this._username = value;
    };
};

class Admin extends User {
    constructor() {
        super();
    };

    
    stateYourRole() {
        return "admin";
    };
};

class Viewer extends User {
    constructor() {
        super();
    };

    // abstract method
    stateYourRole() {
        return "viewer";
    };
};

//object, set the username
const admin = new Admin();
admin.username = "Balthazar";
console.log(admin.stateYourRole()); 

//object, set the username
const viewer = new Viewer();
viewer.username = "Melchior";
console.log(viewer.stateYourRole()); 
