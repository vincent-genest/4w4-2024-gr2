// Insertion d'image
let single__img = document.querySelector(".carte .wp-block-gallery");
let single__texte = document.querySelector(".carte > p");

let single__div__infos = document.querySelector(".carte__contenu > div:first-of-type");
let single__div__img = document.querySelector(".carte__contenu > div:last-of-type");

// insérer le texte de la carte dans la div des infos
single__div__infos.appendChild(single__texte);

// insérer l'image de la carte dans la div de l'image
single__div__img.appendChild(single__img);

// Parallax
function parallax() {
    var $image = document.querySelector(".entete__article");
    var yPos = window.scrollY / 5;
    yPos = -yPos;

    var coords = "0% " + yPos + "px";

    $image.style.backgroundPosition = coords;
}

window.addEventListener("scroll", function () {
    if (window.screen.width > 700) {
        parallax();
    }
});

// Figure adaptative

ajuster_colonnes();
window.addEventListener("resize", ajuster_colonnes);

function ajuster_colonnes() {
    if (window.screen.width < 700) {
        console.log("celk");
        single__img.classList.remove("columns-2");
        single__img.classList.add("columns-1");
    } else {
        console.log("ordi");
        single__img.classList.remove("columns-1");
        single__img.classList.add("columns-2");
    }
}
