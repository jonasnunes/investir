function simular(){
    var valor = document.getElementById('valor').value
    var tempo = document.getElementById('tempo').value

    var meses = tempo * 12
    var taxaJuros = 1 + (12 / 100)
    var valorTotal = valor * meses
    var total = valorTotal * (taxaJuros ** tempo)
    
    document.getElementById('resultado').innerHTML = 'Se você guardar R$ ' + valor + ' todo mês, durante ' + meses + ' meses, no final você terá ' + total.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
}

