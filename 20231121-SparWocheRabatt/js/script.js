//erstelle 3 Arrays
const weekday = ['Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'];
const image = [
    'imgs/02.jpg',
    'imgs/03.jpg',
    'imgs/04.jpg',
    'imgs/05.jpg',
    'imgs/06.jpg',
    'imgs/07.jpg',
    ];
const texts = [
    '25% auf alle Spar Bio-Produkte*', 
    '25% auf Frishfisch & Meeresfrüchte*',
    '25% auf alle Innocent Produkte*',
    '25% auf alle Tea Produkte*',
    '25% auf alle Bier*',
    '25% auf alle Knabberartikel*'
]

//function für die Standard Woche
function createcontainer(container, weekday, image, texts) {
    for(i=0; i<weekday.length; i++) {
        //neues <div> Container für jeden Tag mit der class "angebot" erstellen
        const rabattcontainer = document.createElement('div');
        rabattcontainer.classList.add('container__angebot');

        //Bild jeden Tag auf HTML ausgeben
        const img = document.createElement('img');
        img.classList.add('container__angebot--img');
        img.src = image[i];
        img.alt = weekday[i];

        //Tag auf HTML
        const day = document.createElement('p');
        day.classList.add('container__angebot--titel');
        day.textContent = weekday[i];

        //Text für jeden Tag auf HTML
        const text = document.createElement('p');
        text.classList.add('container__angebot--text');
        text.textContent = texts[i];

      

        //Bild, Tage, Text in dem rabattcontainer 
        rabattcontainer.appendChild(img);
        rabattcontainer.appendChild(day);
        rabattcontainer.appendChild(text);
        
        //rabattcontainer in dem container
        container.appendChild(rabattcontainer);
    }
}
//function aufrufen => Die Standard Woche wird immer angezeigt
createcontainer(container, weekday, image, texts);


//function für den Eingabefeld
function start() {
    const anzahl = document.getElementById('anzahl').value;

    //neues Container
    const containerElement = document.getElementById('container');
    
    // Entferne vorherige Woche, die schon angezeigt wurde
    containerElement.innerHTML = ''; 

    //eine Schleife, die abhängig von der Anzahl ist
    for (let i = 0; i < anzahl; i++) {
        createcontainer(containerElement, weekday, image, texts);
    }
}

