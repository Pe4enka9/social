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
const username = document.getElementById("name");
const passwordInputRepeat = document.getElementById("password_repeat");

const errorLoginLength = document.querySelector(".error_login_length");
const errorLastNameLength = document.querySelector(".error_lastName_length");
const errorUsernameLength = document.querySelector(".error_name_length");
const errorPassword = document.querySelector(".error_password");
const errorPasswordRepeat = document.querySelector(".error_password_repeat");

form.addEventListener("submit", (event) => {
  if (login.value.length < 1) {
    event.preventDefault();

    login.style.outline = "2px solid #dc3545";
    errorLoginLength.textContent = "Поле не может быть пустым!";
  }

  if (lastName.value.length < 1) {
    event.preventDefault();

    lastName.style.outline = "2px solid #dc3545";
    errorLastNameLength.textContent = "Поле не может быть пустым!";
  }

  if (username.value.length < 1) {
    event.preventDefault();

    username.style.outline = "2px solid #dc3545";
    errorUsernameLength.textContent = "Поле не может быть пустым!";
  }

  if (passwordInput.value.length < 1) {
    event.preventDefault();

    passwordInput.style.outline = "2px solid #dc3545";
    errorPassword.textContent = "Поле не может быть пустым!";
  }

  if (passwordInput.value !== passwordInputRepeat.value) {
    event.preventDefault();

    errorPasswordRepeat.textContent = "Пароли не совпадают!";
  }
});

login.addEventListener("input", () => {
  if (login.value.length < 1) {
    login.style.outline = "2px solid #dc3545";
    errorLoginLength.textContent = "Поле не может быть пустым!";
  } else {
    login.style.outline = "";
    errorLoginLength.textContent = "";
  }
});

lastName.addEventListener("input", () => {
  if (lastName.value.length < 1) {
    lastName.style.outline = "2px solid #dc3545";
    errorLastNameLength.textContent = "Поле не может быть пустым!";
  } else {
    lastName.style.outline = "";
    errorLastNameLength.textContent = "";
  }
});

username.addEventListener("input", () => {
  if (username.value.length < 1) {
    username.style.outline = "2px solid #dc3545";
    errorUsernameLength.textContent = "Поле не может быть пустым!";
  } else {
    username.style.outline = "";
    errorUsernameLength.textContent = "";
  }
});

passwordInput.addEventListener("input", () => {
  if (passwordInput.value.length < 1) {
    passwordInput.style.outline = "2px solid #dc3545";
    errorPassword.textContent = "Поле не может быть пустым!";
  } else {
    passwordInput.style.outline = "";
    errorPassword.textContent = "";
  }
});
