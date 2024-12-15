document.addEventListener("DOMContentLoaded", function() {
    function getCurrentWeek() {
        const now = new Date();
        const dayOfWeek = now.getDay();
        const diffToMonday = (dayOfWeek === 0 ? -6 : 1) - dayOfWeek;

        // Date du lundi actuel
        const monday = new Date(now);
        monday.setDate(now.getDate() + diffToMonday);

        // Date du dimanche actuel
        const sunday = new Date(monday);
        sunday.setDate(monday.getDate() + 6);

        // Obtenir le jour et le mois
        const mondayDay = monday.getDate();
        const mondayMonth = monday.toLocaleString('fr-FR', { month: 'long' });

        const sundayDay = sunday.getDate();
        const sundayMonth = sunday.toLocaleString('fr-FR', { month: 'long' });

        // Si le mois est différent entre lundi et dimanche, afficher les deux mois
        let dateRange;
        if (mondayMonth === sundayMonth) {
            dateRange = `${mondayDay} ${mondayMonth} au ${sundayDay} ${sundayMonth}`;
        } else {
            dateRange = `${mondayDay} ${mondayMonth} au ${sundayDay} ${sundayMonth}`;
        }

        // Mettre à jour l'en-tête du calendrier
        const header = document.querySelector(".header h2");
        if (header) {
            header.textContent = `Semaine du ${dateRange} 2024`;
        }
    }

    // Appeler la fonction pour afficher la semaine actuelle
    getCurrentWeek();
}); 