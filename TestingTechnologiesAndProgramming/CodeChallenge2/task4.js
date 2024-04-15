class User {
    constructor() {
      this.numberOfArticles = 0;
      
    };
  //setter
    setNumberOfArticles(numberOfArticles) {
      this.numberOfArticles = numberOfArticles;
    };
  //getter
    getNumberOfArticles() {
      return this.numberOfArticles;
    };
  
  };
  //author class
  class Author extends User {
    calcScores() {
      return this.numberOfArticles * 10 + 20;
    };
  };
  //editor class
  class Editor extends User {
    calcScores() {
      return this.numberOfArticles * 6 + 15;
    };
  };
  
  // author object
  const author = new Author();
  author.setNumberOfArticles(8);
  console.log("Author's scores:", author.calcScores());
  
  // editor object
  const editor = new Editor();
  editor.setNumberOfArticles(15);
  console.log("Editor's scores:", editor.calcScores());
  