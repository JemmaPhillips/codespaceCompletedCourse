describe('cypress email input', () => {
    it('visit cypress website and input email address', () => {
    //   navigate to actions page
      cy.visit('https://example.cypress.io/commands/actions')
  
     //   Query for the action button with a class ".action-btn" and click on it
      cy.contains('.action-btn').should('exist').click()
      cy.log('Clicked the action button')

    // Query for the element with an id "#action-canvas" and click on it.
    cy.get('#action-canvas').should('exist').click()
    cy.log('Clicked the canvas button')
    // Query for the element with an id "#action-canvas" and click on the "topLeft".
    cy.get('#action-canvas').click('topLeft')
    // Query for the element with an id "#action-canvas" and click on the "bottomRight".
    cy.get('#action-canvas').click('bottomRight')
    })
  })

  