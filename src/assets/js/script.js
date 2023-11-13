$(document).ready(function () {
  $("#flip").click(function() {
      $("#table").slideToggle(300);

  })
})


function checkChange() {
  const p = document.querySelectorAll(".td");

  for(const pp of p) {

      pp.addEventListener("click", (e) => {
          e.preventDefault();
          pp.classList.add("text-decoration-line-through");

      })
      
  }
}