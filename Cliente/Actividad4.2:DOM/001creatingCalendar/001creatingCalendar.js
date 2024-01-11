"use strict"

/*La funcion creaCalendario recibe un elemento, un año y un 
mes, y genera una tabla con el año y mes en la parte 
superior, seguido de los dias de la semana. Rellena los 
dias correspondientes al mes y ajusta el inicio y el final 
del mes en la tabla. La funcion getDay asegura 
que la semana comience con lunes.*/

function creaCalendario(elem, year, month) {
    let mes = month - 1; 
    let d = new Date(year, mes);

    let tabla = '<table>';

    tabla += '<tr><td class="month-year" colspan="7">' + year + ' - ' + (month < 10 ? '0' : '') + month + '</td></tr>';

    tabla += '<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr><tr>';

    for (let i = 0; i < getDay(d); i++) {
        tabla += '<td></td>';
    }

    while (d.getMonth() == mes) {
        tabla += '<td>' + d.getDate() + '</td>';

        if (getDay(d) % 7 == 6) { 
            tabla += '</tr><tr>';
        }

        d.setDate(d.getDate() + 1);
    }

    if (getDay(d) != 0) {
        for (let i = getDay(d); i < 7; i++) {
            tabla += '<td></td>';
        }
    }

    tabla += '</tr></table>';

    elem.innerHTML = tabla;
}

function getDay(date) { 
    let dia = date.getDay();
    if (dia == 0) dia = 7; 
    return dia - 1;
}

creaCalendario(document.getElementById('calendario'), 2012, 9)