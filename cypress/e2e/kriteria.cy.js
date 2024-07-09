context('Kriteria Test', () => {
  const loginUser = (email,password) =>  {
    cy.get('#email').type(email)
    cy.get('#password').type(password)
    cy.get('button[type=submit]').click()
  };

  beforeEach(() => {
    const url = 'http://127.0.0.1:8000/';
    cy.log('Visit URL: ${url}');
    cy.visit(url);
  });

  // it('Form Tambah Data Kriteria Tidak Lengkap', () => {
  //   loginUser("bimbelbrawijaya@gmail.com","admin123");
  //   cy.url().should('include', '');

  //   //klik card kriteria
  //   cy.get('[data-cy=kriteria-link]').click()
  //   cy.url().should('include', '/kriteria')

  //   // klik tombol tambah kriteria
  //   cy.contains('Tambah Kriteria').click()

  //   // Memastikan modal terlihat
  //   cy.get('#createKriteria .modal-content form').should('be.visible')

  //   // Mengisi form
  //   // cy.get('#createKriteria > .modal-dialog > .modal-content > form > .modal-body > :nth-child(1) > #nama_kriteria').type('Kriteria 10')
  //   cy.get('#createKriteria > .modal-dialog > .modal-content > form > .modal-body > :nth-child(2) > #bobot_kriteria').type(4)  
  //   cy.get('#createKriteria > .modal-dialog > .modal-content > form > .modal-body > :nth-child(3) > #attribute').select('Benefit')

  //   cy.get('#createKriteria > .modal-dialog > .modal-content > form > .modal-body > :nth-child(4) > .simpan').click()
  //   cy.wait(1000)
  // });

  // it('Admin Edit Data Kriteria', () => {
  //   loginUser("bimbelbrawijaya@gmail.com","admin123");
  //   cy.url().should('include', '');

  //   //klik card kriteria
  //   cy.get('[data-cy=kriteria-link]').click()
  //   cy.url().should('include', '/kriteria')

  //   // Klik tombol edit salah satu data kriteria
  //   cy.get('a[data-bs-target="#editKriteria-10"]').click()

  //   // Memastikan modal terlihat
  //   cy.get('#editKriteria-10 .modal-content form').should('be.visible')

  //   // Mengisi form
  //   cy.get('#editKriteria-10 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(1) > #nama_kriteria').clear({ force: true }).type('Gilang Setyawan', { force: true })
  //   cy.get('#editKriteria-10 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(2) > .form-control').clear().type(2)  
  //   cy.get('#editKriteria-10 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(3) > #attribute').select('Benefit')

  //   cy.get('#editKriteria-10 button.simpan.btn.btn-primary').click()
    
  //   // Optional wait for the form submission and page update
  //   cy.wait(3000)
  // });

  it('Admin Hapus Data Kriteria', () =>{
    loginUser("bimbelbrawijaya@gmail.com","admin123");
    cy.url().should('include', '');

    //klik card kriteria
    cy.get('[data-cy=kriteria-link]').click()
    cy.url().should('include', '/kriteria')

    // Klik tombol hapus salah satu data kriteria
    cy.get(':nth-child(5) > :nth-child(5) > .d-flex > .delete-button').click()

    cy.get(':nth-child(2) > .swal-button').click()
  });
});