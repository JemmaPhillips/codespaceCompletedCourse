describe('computing Course Page Test', () => {
  it('Visit Edin College website and close cookies', () => {
    // visit URL
    cy.visit('https://www.edinburghcollege.ac.uk/')

    // close the cookies
    // assertion: make sure the close button exists and click on it
    cy.get('#ccc-close').should('exist').click().then(() => {
      cy.log('Cookies modal closed')
    }).then(
      cy.log('Cookies modal not found, continuing...')
    )

    // click 'courses' link
    // assertion: make sure the courses link exsits and is clickable
    cy.contains('Courses').should('exist').and('be.visible').click()
      cy.log('Clicked the Courses link')  
      
    // click on 'computing' link
    // assertion: make sure the computing link exsits and is clickable
    cy.contains('Comuting').should('exist').and('be.visible').click()
      cy.log('Clicked the Computing link') 
    // check if we are in the 'computing' page
    // make sure the current URL is the computing course page URL
      cy.url().should('eq','https://www.edinburghcollege.ac.uk/courses/explore-subject-areas/computing' )
      cy.log('computing Course Page')
  })
})
