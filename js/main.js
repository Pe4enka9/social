const password_eye = document.querySelector(".password_eye");
const password_input = document.getElementById("password");

password_eye.addEventListener("click", () => {
  if (password_eye.classList.contains("password_hide")) {
    password_eye.classList.remove("password_hide");
    password_eye.classList.add("password_show");

    password_input.type = "text";
  } else {
    password_eye.classList.remove("password_show");
    password_eye.classList.add("password_hide");

    password_input.type = "password";
  }
});
