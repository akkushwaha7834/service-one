window.addEventListener("scroll", function () {
  const header = document.getElementById("header");
  if (window.scrollY > 50) {
    header.classList.add("bgc-primary", "position-fixed");
  } else {
    header.classList.remove("bgc-primary", "position-fixed");
  }
});
