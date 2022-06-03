function simular(){
    var valor = document.getElementById('valor')
    var tempo = document.getElementById('tempo')

    var meses = tempo * 12
    var juros = valor * 0.01
    var total = 0

    for(var i = tempo; i <= meses; i++){
        total = total + valor
        juros = total * 0.01
        total = total + juros
    }
    
    alert('Valor: ' + valor.value + 'Tempo: ' + tempo.value + total.value)
}

