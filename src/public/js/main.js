// Sélectionne l'image à faire scaler
const image = document.querySelector('.heart-scale img');

// Définir les valeurs minimum et maximum de scale
const minScale = 1; // Taille initiale
const maxScale = 3; // Taille maximale

// Ajoute un gestionnaire d'événement pour suivre le scroll
window.addEventListener('scroll', () => {
    // La hauteur totale de défilement possible
    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;

    // La position actuelle du défilement
    const scrollPosition = window.scrollY;

    // Calculer la progression (de 0 à 1)
    const scrollFraction = scrollPosition / scrollableHeight;

    // Calculer le scale basé sur la progression
    const scale = minScale + (maxScale - minScale) * scrollFraction;

    // Appliquer le scale à l'image
    image.style.transform = `scale(${scale})`;
});