toggle = document.getElementById("toggle");
toggle2 = document.getElementById("toggle2");

toggle.onclick = () => {
  window.sidebar.classList.toggle("slid");
  toggle2.classList.toggle("hide_btn");
}
toggle2.onclick = () => {
  window.sidebar.classList.toggle("slid");
  toggle2.classList.toggle("hide_btn");
}

// Call the function on page load and whenever the window is resized
function toggleSidebar() {
  if (window.innerWidth <= 600) {
    window.sidebar.classList.add("slid");
    window.sidebar.classList.add("fixed");
    toggle2.classList.remove("hide_btn");
  }else{
    window.sidebar.classList.remove("slid");
    window.sidebar.classList.remove("fixed");
    toggle2.classList.add("hide_btn");
  }
}

toggleSidebar();

window.addEventListener("resize", toggleSidebar);

let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenus");
  });
}

