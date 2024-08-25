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
const passwordInputRepeat = document.getElementById("password_repeat");

form.addEventListener("submit", (event) => {
  if (passwordInput.value !== passwordInputRepeat.value) {
    const errorPassword = document.querySelector(".error_password");

    event.preventDefault();

    errorPassword.textContent = "Пароли не совпадают!";
  }
});
