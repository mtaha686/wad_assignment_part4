const inputName = document.getElementById("inputName");
const inputContact = document.getElementById("inputContact");
const inputRegNo = document.getElementById("inputRegNo");

function validateName(enteredName) {
  if (enteredName.length >= 20) return true;
  return false;
}

function validateContact(enteredContact) {
  if (enteredContact.length > 11) return true;
  return false;
}

function validateRegNo(enteredRegNo) {
  if (enteredRegNo.length === 11 || enteredRegNo.length === 0) return true;

  return false;
}

inputName.addEventListener("change", function () {
  const enteredName = inputName.value;
  const invalidName = document.getElementById("errorInvalidName");

  if (validateName(enteredName)) {
    invalidName.style.visibility = "visible";
    invalidName.innerHTML = "invalid name entered";
    invalidName.style.color = "red";
  } else {
    invalidName.style.visibility = "hidden";
  }
});

inputContact.addEventListener("change", function () {
  const enteredContact = inputContact.value;
  const invalidContact = document.getElementById("errorInvalidContact");

  if (validateContact(enteredContact)) {
    invalidContact.style.visibility = "visible";
    invalidContact.innerHTML = "invalid contact entered";
    invalidContact.style.color = "red";
  } else {
    invalidContact.style.visibility = "hidden";
  }
});

inputRegNo.addEventListener("change", function () {
  const enteredRegNo = inputRegNo.value;
  const invalidRegNo = document.getElementById("errorInvalidRegNo");

  if (!validateRegNo(enteredRegNo)) {
    invalidRegNo.style.visibility = "visible";
    invalidRegNo.innerHTML = "invalid regNo entered";
    invalidRegNo.style.color = "red";
  } else {
    invalidRegNo.style.visibility = "hidden";
  }
});
