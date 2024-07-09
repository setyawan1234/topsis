context('Keterangan Kriteria Test', () => {
    const loginUser = (email, password) => {
        cy.get('#email').type(email)
        cy.get('#password').type(password)
        cy.get('button[type=submit]').click()
    };

    beforeEach(() => {
        const url = 'http://127.0.0.1:8000/';
        cy.log('Visit URL: ${url}');
        cy.visit(url);
    });

    // it('Form Keterangan Kriteria Tidak Lengkap ', () => {
    //     loginUser("bimbelbrawijaya@gmail.com","admin123");
    //     cy.url().should('include', '');

    //     // Klik card body keterangan kriteria
    //     cy.get('[data-cy=keterangan-kriteria-link]').click();
    //     cy.url().should('include', '/subkriteria')

    //     // Klik tombol tambah keterangan kriteria yang dipilih
    //     cy.get('a[data-bs-target="#createSubkriteria-5"]').click()

    //     // Memastikan modal terlihat
    //     cy.get('#createSubkriteria-5 .modal-content form').should('be.visible')

    //     // Mengisi form
    //     // cy.get('#createSubkriteria-5 > .modal-dialog > .modal-content > form > .modal-body > .d-flex > :nth-child(1) > #nama_subkriteria').type('Subkriteria 1')
    //     cy.get('#createSubkriteria-5 > .modal-dialog > .modal-content > form > .modal-body > .d-flex > :nth-child(2) > #bobot_subkriteria').select(2)

    //     cy.get('#createSubkriteria-5 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(7) > .simpan').click()
    //     cy.wait(1000)
    // });

    // it('Admin Edit Data Keterangan Kriteria', () => {
    //     loginUser("bimbelbrawijaya@gmail.com","admin123");
    //     cy.url().should('include', '');

    //     // Klik card body keterangan kriteria
    //     cy.get('[data-cy=keterangan-kriteria-link]').click();
    //     cy.url().should('include', '/subkriteria')

    //     // Klik tombol detail keterangan kriteria yang dipilih
    //     cy.get('.btn.btn-warning').eq(4).click();

    //     // Klik tombol edit keterangan kriteria yang dipilih
    //     cy.get('a[data-bs-target="#editSubkriteria-22"]').click()

    //     // Memastikan modal terlihat
    //     cy.get('#editSubkriteria-22 .modal-content form').should('be.visible')

    //     // Mengisi form
    //     cy.get('#editSubkriteria-22 > .modal-dialog > .modal-content > form > .modal-body > .d-flex > :nth-child(1) > #nama_subkriteria').clear({ force: true }).type('Subkriteria 1', { force: true })
    //     cy.get('#editSubkriteria-22 > .modal-dialog > .modal-content > form > .modal-body > .d-flex > :nth-child(2) > #bobot_subkriteria').select(0)

    //     cy.get('#editSubkriteria-22 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(7) > .simpan').click()
    // });

    // it('Admin Hapus Data Keterangan Kriteria', () => {
    //     loginUser("bimbelbrawijaya@gmail.com", "admin123");
    //     cy.url().should('include', '');

    //     // Klik card body keterangan kriteria
    //     cy.get('[data-cy=keterangan-kriteria-link]').click();
    //     cy.url().should('include', '/subkriteria')

    //     // Klik tombol detail keterangan kriteria yang dipilih
    //     cy.get('.btn.btn-warning').eq(4).click();

    //     // Klik tombol hapus keterangan kriteria yang dipilih
    //     cy.get('.btn.btn-danger').eq(1).click();

    //     cy.get(':nth-child(2) > .swal-button').click()
    // });
});