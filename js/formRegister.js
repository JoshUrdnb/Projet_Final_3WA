// Récupération des éléments HTML
const form = document.getElementById('formRegister');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

// Définition des expressions régulières
const emailRegex = /^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/;

// Fonction de validation du formulaire
function validateForm(event) {
  // Empêche l'envoi du formulaire par défaut
  

  // Réinitialisation des messages d'erreur
  clearErrors();

  // Validation du champ nom
  if (nameInput.value.trim() === '') {
    displayError(nameInput, 'L\'username est obligatoire.');
  }

  // Validation du champ email
  if (!emailRegex.test(emailInput.value.trim())) {
    displayError(emailInput, 'L\'email est invalide.');
  }

  // Validation du champ mot de passe
  if (passwordInput.value.trim() === '') {
    displayError(passwordInput, 'Le mot de passe est obligatoire.');
  }

  // Si le formulaire est valide, envoi du formulaire
  if (isFormValid()) {
    form.submit();
    // alert("valide");
  } else {
    event.preventDefault();
  }
}

// Fonction d'affichage d'un message d'erreur
function displayError(input, message) {
  const errorDiv = input.nextElementSibling;
  errorDiv.innerText = message;
  errorDiv.style.display = 'block';
  input.classList.add('invalid-input');
}

// Fonction de réinitialisation des messages d'erreur
function clearErrors() {
  const errorMessages = document.getElementsByClassName('error-message');
  for (let i = 0; i < errorMessages.length; i++) {
    errorMessages[i].style.display = 'none';
  }
  nameInput.classList.remove('invalid-input');
  emailInput.classList.remove('invalid-input');
  passwordInput.classList.remove('invalid-input');
}

// Fonction de vérification de la validité du formulaire
function isFormValid() {
  return nameInput.value.trim() !== '' &&
         emailRegex.test(emailInput.value.trim()) &&
         passwordInput.value.trim() !== '';
}

// Écouteur d'événement sur la soumission du formulaire
// form.addEventListener('submit', validateForm);