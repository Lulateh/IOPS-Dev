describe('Agregar una nueva entrega seleccionando un producto del dropdown', () => {
  it('Debería seleccionar un producto y agregar una entrega correctamente', () => {
    // Paso 1: Visitar la página de agregar entrega
    cy.visit('http://localhost/LogiStock/public/incoming/addIncoming');

    // Paso 2: Seleccionar un producto del dropdown
    cy.get('#producto').select('Coca cola'); // Reemplaza 'Producto 1' con un valor válido

    // Paso 3: Seleccionar un proveedor del dropdown
    cy.get('#proveedor').select('Carlos'); // Reemplaza 'Proveedor 1' con un valor válido

    cy.get('#cantidad').type('10'); // Ingresar la cantidad de productos
    // Paso 4: Hacer clic en "Agregar entrada"
    cy.contains('Agregar entrada').click();

    // Paso 5: Verificar que la entrega fue agregada
    cy.url().should('eq', 'http://localhost/LogiStock/public/incoming');

  });
});