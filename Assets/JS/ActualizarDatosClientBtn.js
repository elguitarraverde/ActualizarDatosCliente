function actualizarDatosClientBtn()
{
    salesFormAction('set-customer', '0');

    setTimeout(() => {
        salesFormSave('save-doc', '0');
    }, 800);
}