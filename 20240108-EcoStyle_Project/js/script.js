"use strict";


// suche alle inputfeld
const inputs = document.querySelectorAll('.number');

// Event-Listener für Änderungen 
const productInputs = document.querySelectorAll('.number');

for (let i = 0; i < productInputs.length; i++) {
    const input = productInputs[i];
    input.addEventListener('change', updateTotal);
}

// Radio-Buttons für Versand
const postRadio = document.getElementById('post');
const sahRadio = document.getElementById('sah');

postRadio.addEventListener('change', updateTotal);
sahRadio.addEventListener('change', updateTotal);

// Funktion für gesammte Preise
function updateTotal() {
    const inputs = document.querySelectorAll('.number');
    let index = 0;
    let subtotal = 0;
    
    while (index < inputs.length) {
        const quantity = parseInt(inputs[index].value) || 0;
        
        // Die Preise in einem Array speichern
        const prices = [7.90, 19.90, 14.90, 6.90, 24.90, 3.90, 9.90, 14.90, 19.90, 2.90];
    
        subtotal += quantity * prices[index];
        index++;
    }

    const taxRate = 0.2; 
    const tax = subtotal * taxRate;
    
    let shippingCost = 0;
    if (postRadio.checked) {
        shippingCost = 5.90;
    } else if (sahRadio.checked) {
        shippingCost = 0;
    }
    
    let total = 0;
    if (subtotal + tax < 100) {
      total = subtotal + tax + shippingCost;
    } else {
      total = subtotal + tax;
    }
    // Aktualisiere die Anzeige auf der Webseite
  let formattedSubtotal = subtotal.toFixed(2).replace(".", ",");
  let formattedTax = tax.toFixed(2).replace(".", ",");
  let formattedTotal = total.toFixed(2).replace(".", ",");

  document.getElementById("zwischensumme").innerText = "€" + formattedSubtotal;
  document.getElementById("mwst").innerText = "€" + formattedTax;
  document.getElementById("gesamt").innerText = "€" + formattedTotal;
}
