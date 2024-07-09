context('Alternatif Test', () => {
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

    // it('Form Tambah Alternatif Tidak Lengkap', () => {
    //     loginUser('bimbelbrawijaya@gmail.com', 'admin123');
    //     cy.url().should('include', '');

    //     // Klik card alternatif
    //     cy.get('[data-cy=alternatif-link]').click();
    //     cy.url().should('include', '/alternatif');

    //     // Klik tombol tambah alternatif
    //     cy.get('a[data-bs-target="#createAlternatif"]').click();

    //     // Memastikan modal terlihat
    //     cy.get('#createAlternatif .modal-content form').should('be.visible');

    //     // Mengisi form
    //     // cy.get('#createAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(1) > #kode_alternatif').type(4);
    //     cy.get('#createAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(2) > #nama_alternatif').type('Keterangan 1',{ force: true });

    //     cy.get('button.simpan.btn.btn-primary').click();
    // });

    it('Admin Edit Data Alternatif', () => {
        loginUser('bimbelbrawijaya@gmail.com', 'admin123');
        cy.url().should('include', '');

        // Klik card alternatif
        cy.get('[data-cy=alternatif-link]').click();
        cy.url().should('include', '/alternatif');

        // Klik tombol edit salah satu data alternatif
        cy.get('a[data-bs-target="#editAlternatif-4"]').click();

        // Memastikan modal terlihat
        cy.get('#editAlternatif-4 .modal-content form').should('be.visible');

        // Mengisi form
        cy.get('#editAlternatif-4 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(2) > #nama_alternatif').clear({ force: true }).type('Edit Keterangan 1', { force: true });

        cy.get('#editAlternatif-4 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(3) > .btn-primary').click();
    });

    it('Admin Hapus Data Alternatif', () => {
        loginUser('bimbelbrawijaya@gmail.com', 'admin123');
        cy.url().should('include', '');

        // Klik card alternatif
        cy.get('[data-cy=alternatif-link]').click();
        cy.url().should('include', '/alternatif');

        // Klik tombol hapus salah satu data alternatif
        cy.get('.btn.btn-danger.delete-button').eq(0).click();

        cy.get(':nth-child(2) > .swal-button').click()
    });
});