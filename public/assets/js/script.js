// tous les éléments de lien avec la classe "dash-link"
const links = document.querySelectorAll('.dash-link');

// affiche le contenu dans la colonne de droite
const rightColumn = document.querySelector('.switch-link');

// un gestionnaire d'événements pour chaque lien
links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        // Récupérez l'ID du lien cliqué
        const linkID = this.id;
        // Switch sur l'ID des liens
        switch (linkID) {
            case 'planning':
                rightColumn.textContent = 'Affichage des détails du planning';
                break;
            case 'message':
                rightColumn.textContent = 'Affichage des messages';
                break;
            case 'settings':
                rightColumn.textContent = 'Affichage des réglages';
                break;
            case 'customer':
                rightColumn.textContent = 'Affichage des clients';
                break;
            case 'rdv':
                rightColumn.textContent = 'Affichage des rendez-vous';
                break;
            case 'shop':
                rightColumn.textContent = 'Affichage des paramêtres de la boutique';
                break;
            default:
                rightColumn.textContent = 'Sélection non reconnue';
        }
    });
});

