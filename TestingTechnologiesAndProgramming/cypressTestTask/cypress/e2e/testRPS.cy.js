describe('Rock Paper Scissors Test', () => {
//    open the URL before each test
beforeEach(()=>{
    cy.visit('http://127.0.0.1:3000/index.html');
});
   //  play game with Rock option and checks result
    it('Test rock option and check result', () => {
    // click the rock button
   cy.get('[data-cy="rock"]').should("exist").click();   

    // check the user option is set to rock
    cy.get('[USEROPTION data tag]').should("have.text", "rock");

    // check the computer option
    cy.get('[COMPUTER OPTION data tag]').then((option)=>{
   // if the computer option is set to rock 
   if(option.text().includes("rock")){
     // the result should be a tie
     cy.get('[result cy]').contains("It is a tie!");
   }
           

     // if the computer option is set to paper 
     if(option.text().includes("paper")){
          // the result should be computer win
        cy.get('[result cy]').contains("You loose!");
      }
       // if the computer option is set to scissors
      else{
        // the result should be user win
        cy.get('[result cy]').contains("You win!");
    }    
    }
    });
     

    })
    //  play game with paper option and checks result
    it('Test paper option and check result', () => {
        // click the paper button
        cy.get('[data-cy="paper"]').should("exist").click();
        // check the user option is set to paper
        cy.get('[USEROPTION data tag]').should("have.text", "paper");
        // check the computer option
        cy.get('[COMPUTER OPTION data tag]').then((option)=>{
              // if the computer option is set to paper 
              if(option.text().includes("paper")){
            // the result should be a tie
            cy.get('[result cy]').contains("It is a tie!");
        }

     // if the computer option is set to rock
     if(option.text().includes("rock")){
            // the result should be user win
            cy.get('[result cy]').contains("You win!");
        }

     // if the computer option is set to scissors
     else{
            // the result should be computer win
            cy.get('[result cy]').contains("You loose!");
        }  
    });
    //  play game with scissors option and checks result
    it('Test scissors option and checks result', () => {
        // click thee scissors button
        cy.get('[data-cy="scissors"]').should("exist").click();
        // check the user option is set to scissors
        cy.get('[USEROPTION data tag]').should("have.text", "scissors");
        // check the computer option
        cy.get('[COMPUTER OPTION data tag]').then((option)=>{
      // if the computer option is set to rock 
      if(option.text().includes("rock")){
            // the result should be a tie
            cy.get('[result cy]').contains("It is a tie!");
        }


     // if the computer option is set to paper 
     if(option.text().includes("paper")){
            // the result should be computer win
            cy.get('[result cy]').contains("You loose!");
        }

     // if the computer option is set to scissors
     else{
            // the result should be user win
            cy.get('[result cy]').contains("You win!");
        } 
    })
   
  })