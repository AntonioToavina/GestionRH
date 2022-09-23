class Postulant {
    nom;
    prenom;
    dn;
    adresse;
    contact;
    cin;
    genre;
    email;
    nomPere;
    prePere;
    proPere;
    nomMere;
    preMere;
    proMere;
    marie;
    nbEnf;
    affiliation;
    sitJur;
    exp;
    dipl;

    constructor() {}
}

let postulant = null;

function inscription() {
    $('#part1').modal('show');
}

function addForm1() {
    postulant = new Postulant();
    postulant.nom = document.getElementById("nom").value;
    postulant.prenom = document.getElementById("prenom").value;
    postulant.dn = document.getElementById("dN").value;
    postulant.adresse = document.getElementById("adresse");
    postulant.contact = document.getElementById("cin").value;
    postulant.genre = document.getElementById("genre").value;
    postulant.email = document.getElementById("email").value;
    postulant.nomPere = document.getElementById("npere").value;
    postulant.prePere = document.getElementById("ppere").value;
    postulant.proPere = document.getElementById("propere").value;
    postulant.nmere = document.getElementById("nmere").value;
    postulant.preMere = document.getElementById("pmere").value;
    postulant.proPere = document.getElementById("promere").value;
}

function addForm2() {
    postulant.affiliation = document.getElementById("affiliation").value;
    postulant.sitJur = document.getElementById("sjudq").value;
    postulant.exp = document.getElementById("exp").value;
    postulant.dipl = document.getElementById("diplome").value;
    postulant.affiliation = document.getElementById("affiliation").value;
    postulant.marie = document.getElementById("marie").value;
    postulant.nbEnf = document.getElementById("nbE").value;
}

function nextForm() {
    $('#part1').modal('hide');
    addForm1();

    $('#part2').modal('show');
}

function newPostulant(urls) {
    addForm2();
    $('#part2').modal('hide');
    $.ajax({
        url: urls, //Plus controller et methode
        yupe: "POST",
        data: JSON.stringify(postulant),
        datatype: "json",
        sucess: function(data) {
            console.log("Reussi")
        }
    });
}

function changeTimeWork() {
    $('#timework').modal('show');
}

function insertTime(link) {
    var ouverture = document.getElementById("ouverture").value;
    var fermeture = docuement.getElementById("fermeture").value;
    $('#timework').modal('hide');

    $.ajax({
        url: link, //Plus controller et methode
        yupe: "POST",
        data: { 'ouverture': ouverture, 'fermeture': fermeture },
        datatype: "json",
        sucess: function(data) {
            console.log("Reussi")
        }
    });
}