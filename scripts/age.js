const dateNaissance = '1990-05-15';

function calculerAge(dateNaissance) {
    const aujourdHui = new Date();
    const naissance = new Date(dateNaissance);
    let age = aujourdHui.getFullYear() - naissance.getFullYear();

    const moisActuel = aujourdHui.getMonth();
    const jourActuel = aujourdHui.getDate();
    const moisNaissance = naissance.getMonth();
    const jourNaissance = naissance.getDate();
    
    if (moisActuel < moisNaissance || (moisActuel === moisNaissance && jourActuel < jourNaissance)) {
        age--;
    }

    return age;
}

function afficherAge() {
    const age = calculerAge(dateNaissance);
    document.getElementById('resultat').innerText = `- ${age}`; 
}

document.addEventListener('DOMContentLoaded', afficherAge);
