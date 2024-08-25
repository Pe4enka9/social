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
