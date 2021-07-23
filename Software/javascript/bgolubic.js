window.addEventListener("load", pokaziPomoc);

function pokaziPomoc() {
    var pomoc1 = document.getElementById("pomoc1");
    var pomoc2 = document.getElementById("pomoc2");
    var pomoc3 = document.getElementById("pomoc3");
    var pomoc4 = document.getElementById("pomoc4");

    pomoc1.style.visibility = "visible";
    pomoc1.addEventListener("click", function () {
        pomoc1.style.visibility = "hidden";
        pomoc2.style.visibility = "visible";
    });
    pomoc2.addEventListener("click", function () {
        pomoc2.style.visibility = "hidden";
        pomoc3.style.visibility = "visible";
    });
    pomoc3.addEventListener("click", function () {
        pomoc3.style.visibility = "hidden";
        pomoc4.style.visibility = "visible";
    });
    pomoc4.addEventListener("click", function () {
        pomoc4.style.visibility = "hidden";
    });
}

window.addEventListener("load", provjeraPodataka);

function provjeraPodataka() {
    document.getElementById("datumRod").addEventListener("keyup", provjeraDatuma);
    document.getElementById("brojGosti").addEventListener("click", provjeraIzbornika);
    document.getElementById("vrijemePro").addEventListener("input", provjeraVrijeme);

    document.getElementById("submitObrazac").addEventListener("click", function (event) {
        if (!(provjeraDatuma() && provjeraIzbornika() && provjeraVrijeme())) {
            provjeraDatuma();
            provjeraIzbornika();
            provjeraVrijeme();
            event.preventDefault();
            if (confirm("Trebate li pomoć?")) {
                pokaziPomoc();
            }
        }
    });
}

function provjeraDatuma() {
    var labelRod = document.getElementById("labelRod");
    var datum = document.getElementById("datumRod").value;
    var datumLength = datum.length;
    var ispravno;
    if (datumLength !== 11) {
        ispravno = false;
    } else {
        var datumSplit = datum.split(".");
        var datumDan = datumSplit[0];
        var datumMjesec = datumSplit[1];
        var datumGodina = datumSplit[2];
        if (datumDan[0] < 4 && datumDan[1] < 10 && datumMjesec[0] < 2 && datumMjesec[1] < 10 && datumGodina[0] < 10 && datumGodina[1] < 10 && datumGodina[2] < 10 && datumGodina[3] < 10) {
            ispravno = true;
        }
    }

    if (ispravno) {
        labelRod.innerHTML = "Datum proslave rođendana:";
        labelRod.style.color = "green";
    } else {
        labelRod.innerHTML = "* Datum proslave rođendana:";
        labelRod.style.color = "red";
    }

    return ispravno;
}

function provjeraIzbornika() {
    var labelBrojGosti = document.getElementById("labelBrojGosti");
    var izbornik = document.getElementById("brojGosti").options;
    var brojOznacenih = 0;
    var ispravno;
    for (i = 0; i < izbornik.length; i++) {
        if (izbornik[i].selected) {
            brojOznacenih += 1;
        }
    }
    if (brojOznacenih < 2) {
        ispravno = false;
    } else {
        ispravno = true;
    }

    if (ispravno) {
        labelBrojGosti.innerHTML = "Odaberite brojeve gostiju:";
        labelBrojGosti.style.color = "green";
    } else {
        labelBrojGosti.innerHTML = "* Odaberite brojeve gostiju:";
        labelBrojGosti.style.color = "red";
    }

    return ispravno;
}

function provjeraVrijeme() {
    var labelVrijemePro = document.getElementById("labelVrijemePro");
    var vrijeme = document.getElementById("vrijemePro");
    var ispravno;

    if (vrijeme.value === "") {
        ispravno = false;
    } else {
        ispravno = true;
    }

    if (ispravno) {
        labelVrijemePro.innerHTML = "Vrijeme proslave rođendana:";
        labelVrijemePro.style.color = "green";
    } else {
        labelVrijemePro.innerHTML = "* Vrijeme proslave rođendana:";
        labelVrijemePro.style.color = "red";
    }

    return ispravno;
}

window.addEventListener("load", promjenaDizajna);

function promjenaDizajna(){
    var link = document.getElementsByTagName("link");
    document.getElementById("promjenaDizajna").addEventListener("click", function(){
        if(link[0].attributes[1].nodeValue === "../css/bgolubic.css"){
            link[0].attributes[1].nodeValue = "../css/bgolubic_accesibility.css";
        }
        else{
            link[0].attributes[1].nodeValue = "../css/bgolubic.css";
        }
    });
}