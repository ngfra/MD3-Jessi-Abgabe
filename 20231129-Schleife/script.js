"use strict";

//for Schleife
const forSchleife = document.querySelector('.for-schleife');
let a = 150;

for (let i = 0; i < 32; i++) {
    if (i % 3 === 0) {
        forSchleife.innerHTML += `<span style="color:violet;">${a}</span><br>`;
    } else {
        forSchleife.innerHTML += `<span style="color:black;">${a}</span><br>`;
    }

    if (i % 2 === 0) {
        a = a - 21;
    } else {
        a = a + 2;
    }
}

// while Schleife
const whileSchleife = document.querySelector('.while-schleife');
let b = 150;
let x= 0;
while (b >= -156) {
  if(x % 3 === 0) {
    whileSchleife.innerHTML += `<span style="color: violet;">${b}</span><br> `;
  }
  else {
    whileSchleife.innerHTML += `<span style="color: black;">${b}</span><br> `;
  }

  if (x % 2 === 0 ) {
    b = b - 21;
  }
  else {
    b += 2;
  }
  x++;
}

//do while Schleife
const dowhile = document.querySelector('.dowhile-schleife');
let c = 150;
let y = 0;
do {
  if(y%3===0) {
    dowhile.innerHTML += `<span style="color: violet;">${c}</span><br> `;
  }
  else {
    dowhile.innerHTML += `<span style="color: black;">${c}</span><br> `;
  }

  if (y%2===0) {
    c = c -21;
  }
  else {
    c += 2;
  }
  y++;
} while (c>= -156);