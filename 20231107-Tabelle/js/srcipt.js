"use strict";
//variablen
let a = 214;
let summe = 0;
let durchschnitt = 0;
const months = ["Jännar", "Februar", "März", "April", "Mai", "Juni"];

//Tabelle erstellen
document.write("<table>")

//For-loop
document.write("<tr><th>Haushaltsbuch</th><th>Ausgabe</th></tr>")
for (let i=1; i<=6; i++) {
    document.write("<tr><td>"+months[i-1]+"</td>"+"<td>"+a+"</td></tr>");
    summe=summe+a;
    a=a+34; 
}

//eine leere Zeile
document.write("<tr><td><b></b></td>"+"<td>"+""+"</td></tr>")

//summe & durchschnitt
document.write("<tr><td><b>Summe</b></td>"+"<td>"+summe+"</td></tr>")

durchschnitt = summe / 6;
document.write("<tr><td><b>Durchschnitt</b></td>"+"<td>"+durchschnitt+"</td></tr>")

document.write("</table>")