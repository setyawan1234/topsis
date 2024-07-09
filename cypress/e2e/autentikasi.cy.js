describe('Login Test', () => {
  it('Pengguna input dengan salah satu kolom kosong', () => {
    cy.visit('http://127.0.0.1:8000/login')
    cy.get('input[name=email]').type('bimbelbrawijaya@gmail.com')
    // cy.get('input[name=password]').type('admin1234')
    cy.get('button[type=submit]').click()
    cy.url().should('include', 'http://127.0.0.1:8000/')
  })
})

describe('Register Test', () => {
  it('Register Form Tidak Diisi Dengan Lengkap', () => {
    cy.visit('http://127.0.0.1:8000/register')
    cy.get('input[name=name]').type('tes')
    cy.get('input[name=email]').type('tes3@gmail.com')
    // cy.get('input[name=password]').type('admin1234')
    cy.get('input[name=password_confirmation]').type('admin123')
    cy.get('button[type=submit]').click()
    cy.url().should('include', 'http://127.0.0.1:8000/')
  })
})