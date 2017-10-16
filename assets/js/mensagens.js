var sucesso = $.bootstrapGrowl("Cadastro Concluído!", {
    ele: 'body', // which element to append to
    type: 'success', // (null, 'info', 'error', 'success')
    offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
    align: 'right', // ('left', 'right', or 'center')
    width: 250, // (integer, or 'auto')
    delay: 4000,
    allow_dismiss: true,
    stackup_spacing: 10 // spacing between consecutively stacked growls.
});

var erro = $.bootstrapGrowl("Erro ao cadastrar!", {
    ele: 'body', // which element to append to
    type: 'error', // (null, 'info', 'error', 'success')
    offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
    align: 'right', // ('left', 'right', or 'center')
    width: 250, // (integer, or 'auto')
    delay: 4000,
    allow_dismiss: true,
    stackup_spacing: 10 // spacing between consecutively stacked growls.
});



