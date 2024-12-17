// Date de naissance spécifiée dans le JavaScript
const dateNaissance = '1990-05-15'; // Remplacez par la date souhaitée

// Fonction pour calculer l'âge en fonction de la date de naissance
function calculerAge(dateNaissance) {
    const aujourdHui = new Date();  // Date actuelle
    const naissance = new Date(dateNaissance); // Date de naissance
    let age = aujourdHui.getFullYear() - naissance.getFullYear(); // Calcul initial de l'âge

    // Vérifie si l'anniversaire est déjà passé cette année
    const moisActuel = aujourdHui.getMonth();
    const jourActuel = aujourdHui.getDate();
    const moisNaissance = naissance.getMonth();
    const jourNaissance = naissance.getDate();

    // Si l'anniversaire n'est pas encore passé cette année, on réduit l'âge de 1
    if (moisActuel < moisNaissance || (moisActuel === moisNaissance && jourActuel < jourNaissance)) {
        age--;
    }

    return age;
}

// Afficher l'âge dans l'élément HTML
function afficherAge() {
    const age = calculerAge(dateNaissance); // Calcul de l'âge
    document.getElementById('resultat').innerText = `Votre âge est : ${age} ans`; // Affiche le résultat
}

// Appeler la fonction dès que le DOM est entièrement chargé
document.addEventListener('DOMContentLoaded', afficherAge);
