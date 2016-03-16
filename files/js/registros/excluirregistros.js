function confirma_excluir_receita(id) {
    if (confirm('CONFIRMA A EXCLUSAO RECEITA??')) {
        $.ajax({
            url: "registros.php",
            dataType: 'json',
            type: 'GET',
            data: {
                id: id,
                mod: "R"
            },
            complete: function () {
                location.reload();
            }
        });
    }
}


function confirma_excluir_despesa(id) {
    if (confirm('CONFIRMA A EXCLUSAO DESPESA??')) {
        $.ajax({
            url: "registros.php",
            dataType: 'json',
            type: 'GET',
            data: {
                id: id,
                mod: "D"
            },
            complete: function () {
                location.reload();
            }
        });
    }
}