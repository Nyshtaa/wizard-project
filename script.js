document.getElementById("continueButton").addEventListener("click", function(event) {
   event.preventDefault(); 

   const email = document.getElementById("email").value;
   const emailError = document.getElementById("emailError");

   if (!validateEmail(email)) {
       emailError.style.display = "block";
       console.log("Email validation failed"); 
       return; 
   } else {
       emailError.style.display = "none";
       console.log("Email validation passed"); 
   }

   showStep(2);
});

document.getElementById("backButton").addEventListener("click", function() {
   showStep(1);
});

function showStep(step) {
   if (step === 1) {
       document.querySelector('.wizard-step-1').style.display = 'block';
       document.querySelector('.wizard-step-2').style.display = 'none';
       document.querySelector('.wizard-step-3').style.display = 'none';
       document.querySelector('.wizard-step-4').style.display = 'none';
       console.log("Switched to step 1"); 
   } else if (step === 2) {
       document.querySelector('.wizard-step-1').style.display = 'none';
       document.querySelector('.wizard-step-2').style.display = 'block';
       document.querySelector('.wizard-step-3').style.display = 'none';
       document.querySelector('.wizard-step-4').style.display = 'none';
       console.log("Switched to step 2"); 
   } else if (step === 3) {
      document.querySelector('.wizard-step-1').style.display = 'none';
      document.querySelector('.wizard-step-2').style.display = 'none';
      document.querySelector('.wizard-step-3').style.display = 'block';
      document.querySelector('.wizard-step-4').style.display = 'none';
      console.log("Switched to step 3");
  }else if (step === 4) {
   document.querySelector('.wizard-step-1').style.display = 'none';
   document.querySelector('.wizard-step-2').style.display = 'none';
   document.querySelector('.wizard-step-3').style.display = 'none';
   document.querySelector('.wizard-step-4').style.display = 'block';
   console.log("Switched to step 4");
}
}

function validateEmail(email) {
   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   return emailRegex.test(email);
}

document.getElementById("continueButton").addEventListener("click", function(event) {
    event.preventDefault(); 

    const quantity = document.getElementById("quantity").value;
    const quantityError = document.getElementById("quantityError");

    if (quantity < 1 || quantity > 1000 || isNaN(quantity)) {
        quantityError.style.display = "block";
        console.log("Quantity validation failed"); 
        return;
    } else {
        quantityError.style.display = "none";
        console.log("Quantity validation passed"); 
    }

    showStep(3);
});

document.getElementById("backButton").addEventListener("click", function() {
    showStep(1);
});


function goToStep3() {
   const quantityInput = document.getElementById('quantity'); 
   const quantity = parseInt(quantityInput.value); 

   if (!quantity || quantity < 1 || quantity > 1000) {
       alert("Please enter a valid quantity between 1 and 1000.");
       return; 
   }

   let price;
   if (quantity >= 1 && quantity <= 10) {
       price = 10;
   } else if (quantity >= 11 && quantity <= 100) {
       price = 100;
   } else if (quantity >= 101 && quantity <= 1000) {
       price = 1000;
   }

   document.querySelector('.price-result').innerText = `$${price}`; 

   showStep(3);
}

function validateFields() {
   const name = document.getElementById("name").value;
   const email = document.getElementById("email").value;
   const phone = document.getElementById("phone").value;
   const quantity = document.getElementById("quantity").value;

   if (!name || !email || !phone || !quantity) {
       alert("Please fill in all fields.");
       return false;
   }

   if (quantity < 1 || quantity > 1000) {
       alert("Quantity must be between 1 and 1000.");
       return false;
   }

   return true;
}

function sendData() {
   const name = document.getElementById('name').value;
   const email = document.getElementById('email').value;
   const phone = document.getElementById('phone').value;
   const quantity = document.getElementById('quantity').value; 

   const data = {
       name: name,
       email: email,
       phone: phone,
       quantity: quantity
   };

   fetch('save-data.php', { 
       method: 'POST',
       headers: {
           'Content-Type': 'application/json'
       },
       body: JSON.stringify(data)
   })
   .then(response => {
       if (response.ok) {
           document.getElementById('email-send').style.display = 'block';
           document.getElementById('email-not-send').style.display = 'none';
           showStep(4); 
       } else {
           document.getElementById('email-send').style.display = 'none';
           document.getElementById('email-not-send').style.display = 'block';
           showStep(4); 
       }
   })
   .catch(error => {
       console.error('Error:', error);
       document.getElementById('email-send').style.display = 'none';
       document.getElementById('email-not-send').style.display = 'block';
       showStep(4); 
   });
}

function startAgain() {
   document.getElementById('name').value = '';
   document.getElementById('email').value = '';
   document.getElementById('phone').value = '';
   document.getElementById('quantity').value = ''; 

   document.getElementById('email-send').style.display = 'none';
   document.getElementById('email-not-send').style.display = 'none';

   showStep(1);
}
