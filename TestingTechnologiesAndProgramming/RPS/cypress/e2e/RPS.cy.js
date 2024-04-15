describe('Rock Paper Scissors Test', () => {
  //    open the URL before each test
  beforeEach(()=>{
      cy.visit('http://127.0.0.1:3000/index.html');
  });
     //  play game with "Rock" option and checks result
      it('Test rock option and check result', () => {
      // click the rock button
     cy.get('[data-cy="rock"]').should("exist").click();   
  
      // check the user option is set to rock
      cy.get('[data-cy="user"]').should("have.text", "Rock");
  
      // check the computer option
      cy.get('[data-cy="computer"]').then((option)=>{
     // if the computer option is set to rock 
     if(option.text().includes("Rock")){
       // the result should be a tie
       cy.get('[data-cy="result"]').contains("It's a tie!");
     }
             
       // if the computer option is set to paper 
       if(option.text().includes("Paper")){
            // the result should be computer win
          cy.get('[data-cy="result"]').contains("You lose!");
        }
         // if the computer option is set to scissors
        else{
          // the result should be user win
          cy.get('[data-cy="result"]').contains("You win!");
      }    
      })
      });
       
  
     
      //  play game with "paper" option and checks result
      it('Test paper option and check result', () => {
          // click the paper button
          cy.get('[data-cy="paper"]').should("exist").click();
          // check the user option is set to paper
          cy.get('[data-cy="user"]').should("have.text", "Paper");
          // check the computer option
          cy.get('[data-cy="computer"]').should('be.visible').then((option)=>{
                // if the computer option is set to paper 
                if(option.text().includes("Paper")){
              // the result should be a tie
              cy.get('[data-cy="result"]').contains("It's a tie!");
          }
  
       // if the computer option is set to rock
       if(option.text().includes("Rock")){
              // the result should be user win
              cy.get('[data-cy="result"]').contains("You win!");
          }
  
       // if the computer option is set to scissors
       else{
              // the result should be computer win
              cy.get('data-cy="result"]').contains("You lose!");
          } 
        })     
      });


      //  play game with "scissors" option and checks result
      it('Test scissors option and checks result', () => {
          // click thee scissors button
          cy.get('[data-cy="scissors"]').should("exist").click();
          // check the user option is set to scissors
          cy.get('[data-cy="user"]').should("have.text", "Scissors");
          // check the computer option
          cy.get('[data-cy="computer"]').then((option)=>{
        // if the computer option is set to Scissors
        if(option.text().includes("Scissors")){
              // the result should be a tie
              cy.get('[data-cy="result"]').contains("It's a tie!");
          }
  
  
       // if the computer option is set to Rock 
       if(option.text().includes("Rock")){
              // the result should be computer loose
              cy.get('[data-cy="result"]').contains("You lose!");
          }
  
       // if the computer option is set to Paper
       else{
              // the result should be user win
              cy.get('[data-cy="result"]').contains("You win!");
          } 
      })
     
    })
  })