describe('cypress io page test', () => {
  it('visit cypress website and click on querying', () => {
    cy.visit('https://example.cypress.io')

    cy.contains('get').should('exist').click()
    cy.log('Clicked the querying link')

    cy.url().should('eq','https://example.cypress.io/commands/querying')
    cy.log('Get information page')
  })
})