
google.charts.load("current", {packages: ["corechart"]});
google.charts.setOnLoadCallback(drawTipo);
function drawTipo() {
    var rf = document.getElementById("totalRF").value;
    var rv = document.getElementById("totalRV").value;
    var df = document.getElementById("totalDF").value;
    var dv = document.getElementById("totalDV").value;
    
    var receitaFixa = parseFloat(rf);
    var receitaVariavel = parseFloat(rv);
    var despesaFixa = parseFloat(df);
    var despesaVariavel = parseFloat(dv);
     
    var data = google.visualization.arrayToDataTable([
        ['Receita', 'Por Período'],
        ['Receita Fixa', receitaFixa],
        ['Receita Variável', receitaVariavel],
        ['Despesa Fixa', despesaFixa],
        ['Despesa Variável', despesaVariavel]
    ]);

    var options = {
        title: 'Tipos de Gastos no Período',
        pieHole: 0.4
    };

    var chart = new google.visualization.PieChart(document.getElementById('tipogasto'));
    chart.draw(data, options);
}


google.charts.setOnLoadCallback(drawSaldo);
function drawSaldo() {
    var tr = document.getElementById("totalreceita").value;
    var td = document.getElementById("totaldespesa").value;
    
    var receita = parseFloat(tr);
    var despesa = parseFloat(td);
     
    var data = google.visualization.arrayToDataTable([
        ['Orientação', 'Gráfico'],
        ['Receitas', receita],
        ['Despesas', despesa],
    ]);

    var options = {
        title: 'Visualização de Saldo',
        pieHole: 0.4
    };

    var chart = new google.visualization.PieChart(document.getElementById('saldoview'));
    chart.draw(data, options);
}