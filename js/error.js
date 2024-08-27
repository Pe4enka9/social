const loginInput = document.getElementById("login");
const error = document.querySelectorAll(".error");

error.forEach((err) => {
  err.style.width = loginInput.clientWidth + "px";
});
