window.onload = function() {
    const cases = document.querySelectorAll(".calendar button");
    
    // Création du menu contextuel
    const contextMenu = document.createElement("ul");
    contextMenu.className = "context-menu";
    contextMenu.innerHTML = `
        <li class="vert">Disponible</li>
        <li class="orange">Incertain</li>
        <li class="rouge">Indisponible</li>
        <li class="duno">...</li>
    `;
    document.body.appendChild(contextMenu);

    let currentButton = null;
    let isDragging = false;  // Indicateur si l'utilisateur est en train de "tirer" la sélection

    // Afficher le menu contextuel au clic droit
    cases.forEach(function(button) {
        button.addEventListener("contextmenu", function(e) {
            e.preventDefault();
            currentButton = button;

            // Positionner le menu contextuel
            contextMenu.style.left = `${e.pageX}px`;
            contextMenu.style.top = `${e.pageY}px`;
            contextMenu.style.display = "block";
        });
    });

    // Cacher le menu au clic à l'extérieur
    document.addEventListener("click", function(e) {
        if (!contextMenu.contains(e.target)) {
            contextMenu.style.display = "none";
        }
    });

    // Gestion du clic sur les options du menu contextuel
    contextMenu.addEventListener("click", function(e) {
        if (e.target.tagName === "LI") {
            const colorClass = e.target.className;  // Récupération de la classe
    
            // Supprime toutes les classes de couleur de la case
            currentButton.classList.remove("case-verte", "case-orange", "case-rouge","case-inconnu");
    
            // Ajoute la nouvelle classe correspondante
            if (colorClass === "vert") {
                currentButton.classList.add("case-verte");
                currentButton.innerHTML = "<p>Disponible</p>"; // Texte pour "Disponible"
            } else if (colorClass === "orange") {
                currentButton.classList.add("case-orange");
                currentButton.innerHTML = "<p>Incertain</p>"; // Texte pour "Incertain"
            } else if (colorClass === "rouge") {
                currentButton.classList.add("case-rouge");
                currentButton.innerHTML = "<p>Indisponible</p>"; // Texte pour "Indisponible"
            } else if (colorClass === "duno") {
                currentButton.classList.add("case-inconnu");
                currentButton.innerHTML = "<p>...</p>"; // Texte pour "Inconnu"
            }
    
            // Cache le menu après la sélection
            contextMenu.style.display = "none";
        }
    });

    // Ajouter l'événement pour commencer à étirer la sélection (mousedown)
    cases.forEach(function(button) {
        button.addEventListener("mousedown", function(e) {
            e.preventDefault();
            currentButton = button;

            // Appliquer la couleur initiale à la case cliquée
            const colorClass = getCurrentColorClass();
            currentButton.classList.add(colorClass);
            currentButton.innerHTML = `<p>${getStatusText(colorClass)}</p>`;

            isDragging = true;  // L'utilisateur commence à étirer
        });
    });

    // Suivre le mouvement de la souris (mousemove)
    document.addEventListener("mousemove", function(e) {
        if (isDragging && currentButton) {
            // Vérifier si l'on survole une autre case
            const hoveredButton = document.elementFromPoint(e.clientX, e.clientY);
            
            if (hoveredButton && hoveredButton.tagName === "BUTTON" && !hoveredButton.classList.contains("selected")) {
                const colorClass = getCurrentColorClass();  // Récupérer la classe de couleur actuelle
                
                // Réinitialiser les anciennes classes de couleur
                hoveredButton.classList.remove("case-verte", "case-orange", "case-rouge", "case-inconnu");
                
                // Appliquer la nouvelle classe et mettre à jour le texte
                hoveredButton.classList.add(colorClass);
                hoveredButton.innerHTML = `<p>${getStatusText(colorClass)}</p>`;  // Mettre à jour le texte
            }
        }
    });

    // Arrêter l'étirement lorsque l'on relâche le clic (mouseup)
    document.addEventListener("mouseup", function() {
        isDragging = false;
    });

    // Fonction pour obtenir la classe de couleur actuelle
    function getCurrentColorClass() {
        if (currentButton.classList.contains("case-verte")) {
            return "case-verte";
        } else if (currentButton.classList.contains("case-orange")) {
            return "case-orange";
        } else if (currentButton.classList.contains("case-rouge")) {
            return "case-rouge";
        } else if (currentButton.classList.contains("case-inconnu")) {
            return "case-inconnu";
        }
        return "";  // Aucun changement de couleur
    }

    // Fonction pour obtenir le texte de statut en fonction de la classe de couleur
    function getStatusText(colorClass) {
        switch (colorClass) {
            case "case-verte":
                return "Disponible";
            case "case-orange":
                return "Incertain";
            case "case-rouge":
                return "Indisponible";
            case "case-inconnu":
                return "...";
            default:
                return "...";
        }
    }
    getCurrentWeekDates()
};
