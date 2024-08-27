const passwordEye = document.querySelector(".password_eye");
const passwordInput = document.getElementById("password");

passwordEye.addEventListener("click", () => {
  if (passwordEye.classList.contains("password_hide")) {
    passwordEye.classList.remove("password_hide");
    passwordEye.classList.add("password_show");

    passwordInput.type = "text";
  } else {
    passwordEye.classList.remove("password_show");
    passwordEye.classList.add("password_hide");

    passwordInput.type = "password";
  }
});

const form = document.getElementById("form");
const login = document.getElementById("login");
const lastName = document.getElementById("lastName");
const name = document.getElementById("name");
const passwordInputRepeat = document.getElementById("password_repeat");

const errorLoginLength = document.querySelector(".error_login_length");
const errorLastNameLength = document.querySelector(".error_lastName_length");
const errorNameLength = document.querySelector(".error_name_length");
const errorPassword = document.querySelector(".error_password");

form.addEventListener("submit", (event) => {
  if (login.value.length < 1) {
    event.preventDefault();

    errorLoginLength.textContent = "Поле не может быть пустым!";
  }

  if (lastName.value.length < 1) {
    event.preventDefault();

    errorLastNameLength.textContent = "Поле не может быть пустым!";
  }

  if (name.value.length < 1) {
    event.preventDefault();

    errorNameLength.textContent = "Поле не может быть пустым!";
  }

  if (passwordInput.value !== passwordInputRepeat.value) {
    event.preventDefault();

    errorPassword.textContent = "Пароли не совпадают!";
  }
});

login.addEventListener("input", () => {
  if (login.value.length < 1) {
    errorLoginLength.textContent = "Поле не может быть пустым!";
  } else {
    errorLoginLength.textContent = "";
  }
});
