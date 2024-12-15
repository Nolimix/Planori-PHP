// Sélection des éléments
const menu = document.getElementById(".context-menu");
const button = document.getElementById("color-menu");

// Afficher le menu au clic
button.addEventListener("click", (event) => {
  // Empêcher d'autres comportements si besoin
  event.preventDefault();

    // Récupérer la position du clic
    const rect = button.getBoundingClientRect();
    const x = rect.left;
    const y = rect.bottom;

    // Positionner et afficher le menu
    menu.style.left = `${x}px`;
    menu.style.top = `${y}px`;
    menu.style.display = "block";
});

// Masquer le menu si on clique ailleurs
document.addEventListener("click", (event) => {
    if (!menu.contains(event.target) && event.target !== button) {
     menu.style.display = "none";
     }
 });