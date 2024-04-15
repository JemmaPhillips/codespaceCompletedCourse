describe('cypress email input', () => {
    it('visit cypress website and input email address', () => {
      cy.visit('https://example.cypress.io')
  
      cy.contains('type').should('exist').click()
      cy.log('Clicked the type link')
  
      cy.url().should('eq','https://example.cypress.io/commands/actions')
      cy.get('.action-email').type('email@example.co.uk').should('have.value', 'email@example.co.uk')
      cy.log('Get information page')
    })
  })