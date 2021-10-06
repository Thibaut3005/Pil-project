


let acc = document.getElementsByClassName("secteur__titre");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    let panel = this.nextElementSibling;
    if (panel.style.display === "flex") {
      panel.style.display = "none";
      
    } else {
        for (i=0 ; i< acc.length; i++) {
           document.getElementsByClassName("secteur__panel")[i].style.display=
        }
      panel.style.display = "flex";
      
    }
  });

  
}



