const monat = new Date().getMonth() + 1;

const monatsBilder = {
    1: {bild:'imgs/01.avif', titel:'Hello Januar'}, 
    2: {bild:'imgs/02.avif', titel:'Hello Februar'}, 
    3: {bild:'imgs/03.avif', titel:'Hello März'},
    4: {bild:'imgs/04.avif', titel:'Hello April'}, 
    5: {bild:'imgs/05.avif', titel:'Hello Mai'},
    6: {bild:'imgs/06.avif', titel:'Hello Juni'}, 
    7: {bild:'imgs/07.avif', titel:'Hello Juli'}, 
    8: {bild:'imgs/08.avif', titel:'Hello August'}, 
    9: {bild:'imgs/09.avif', titel:'Hello September'},
    10:{bild:'imgs/10.avif', titel:'Hello October'}, 
    11:{bild:'imgs/11.avif', titel:'Hello November'},
    12:{bild:'imgs/12.avif', titel:'Hello December'},}

const bildpfad = monatsBilder[monat].bild;
const monatstitel = monatsBilder[monat].titel;

document.getElementById('monatsbild').src = bildpfad;
document.getElementById('monatstitel').innerHTML = monatstitel;