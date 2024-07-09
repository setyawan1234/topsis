context('Nilai Alternatif Test', () => {
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

    // it('Form Nilai Alternatif Tidak Lengkap', () => {
    //     loginUser('bimbelbrawijaya@gmail.com', 'admin123');
    //     cy.url().should('include', '');

    //     cy.visit('http://127.0.0.1:8000/nilaialternatif');
    //     cy.url().should('include', '/nilaialternatif');

    //     cy.get('a[data-bs-target="#createNilaiAlternatif"]').click();

    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(1) > #alternatif_id').select(1)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(2) > #value').select(2)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(3) > #value').select(1)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(4) > #value').select(3)
        
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(5) > #value').select(1)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(6) > #value').select(3)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(7) > #value').select(2)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(8) > #value').select(1)
    //     cy.get('#createNilaiAlternatif > .modal-dialog > .modal-content > form > .modal-body > :nth-child(9) > #value').select(1)

    //     cy.get('button.simpan.btn.btn-primary').click()
    // });

    it('Admin Edit Data Nilai Alternatif', () => {
        loginUser('bimbelbrawijaya@gmail.com', 'admin123');
        cy.url().should('include', '');

        cy.visit('http://127.0.0.1:8000/nilaialternatif');
        cy.url().should('include', '/nilaialternatif');

        cy.get('a[data-bs-target="#editNilaiAlternatif-1"]').click();

        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(1) > #alternatif_id')
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(2) > #value').select(2)
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(3) > #value').select(1)
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(4) > #value').select(3)
        
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(5) > #value').select(1)
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(6) > #value').select(1)
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(7) > #value').select(2)
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(8) > #value').select(1)
        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > :nth-child(9) > #value').select(1)

        cy.get('#editNilaiAlternatif-1 > .modal-dialog > .modal-content > form > .modal-body > .py-3 > .btn-primary').click();
    });
});