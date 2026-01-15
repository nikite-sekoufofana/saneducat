const toggle = document.getElementById("menu-toggle");
const nav = document.querySelector(".nav");

toggle.addEventListener("click", () => {
  nav.style.display = nav.style.display === "flex" ? "none" : "flex";
});

document.querySelectorAll("form").forEach(form => {
  form.addEventListener("submit", function (e) {
    e.preventDefault(); // empêche l'envoi réel

    const successMsg = form.nextElementSibling;
    if (successMsg && successMsg.classList.contains("form-success")) {
      successMsg.style.display = "block";
    }

    form.reset();
  });
});

const yearSpan = document.getElementById("year");
if (yearSpan) {
  yearSpan.textContent = new Date().getFullYear();
}
