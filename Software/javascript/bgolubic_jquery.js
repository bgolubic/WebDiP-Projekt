$(document).ready(function () {
    naslov = $(document).find("title").text();
    switch (naslov) {
        case "Galerija":
            $("#galerijaSlika").empty();
            $("#galerijaAudio").empty();
            $("#galerijaVideo").empty();
            $.ajax({
                url: 'dohvacanje_podataka/dohvatGrupa.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        var html = '<option value="' + this[0] + '">' + this[1] + '</option>';
                        $("#grupa").append(html);
                    });
                }
            });
            $("#grupa").on('change', function () {
                var grupaId = $(this).val();
                $.ajax({
                    url: 'dohvacanje_podataka/dohvatMaterijala.php?id=' + grupaId + '&prijavljen=1',
                    method: 'GET',
                    datatype: 'json',
                    success: function (data) {
                        $("#galerijaSlika").empty();
                        $("#galerijaAudio").empty();
                        $("#galerijaVideo").empty();
                        var podaci = jQuery.parseJSON(data);
                        $.each(podaci, function () {
                            if (podaci.length > 0) {
                                if (this[2] === "Slika") {
                                    var html = '<figure><img src="' + this[3] + '/multimedija/' + this[1] + '" width="300" height="300"></figure>';
                                    $("#galerijaSlika").append(html);
                                } else if (this[2] === "Audio") {
                                    var html = '<audio controls><source src="' + this[3] + '/multimedija/' + this[1] + '" type="audio/mpeg"></audio>';
                                    $("#galerijaAudio").append(html);
                                } else if (this[2] === "Video") {
                                    var html = '<video width="320" height="240" controls><source src="' + this[3] + '/multimedija/' + this[1] + '" type="video/mp4"></video>';
                                    $("#galerijaVideo").append(html);
                                }
                            }
                        });
                    }
                });
            });
            break;
        case "Registracija":
            $("#korIme").on("keyup", function () {
                $("#greska").empty();
                var unos = $(this).val();
                $.ajax({
                    url: '../dohvacanje_podataka/dohvatKorisnika.php',
                    method: 'GET',
                    datatype: 'json',
                    success: function (data) {
                        var podaci = jQuery.parseJSON(data);
                        $.each(podaci, function () {
                            if ($(this).attr("korisnici_korisnickoIme") === unos) {
                                $("#greska").append("Korisničko ime već postoji!");
                                $("#submitRegistracija").prop('disabled', true);
                            }
                        });
                    }
                });
            });
            break;
        case "Rezervacija":
            var kolacici = document.cookie.split(";");
            for (i = 0; i < kolacici.length; i++) {
                if (kolacici[i].includes("korisnikId")) {
                    var korisnikId = kolacici[i].split("=")[1];
                }
            }
            $("#grupa").empty();
            $.ajax({
                url: '../dohvacanje_podataka/dohvatGrupa.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        var html = '<option value="' + this[1] + '">' + this[1] + '</option>';
                        $("#grupa").append(html);
                    });
                }
            });
            $.ajax({
                url: '../dohvacanje_podataka/dohvatRezervacija.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        if (this[2] === korisnikId) {
                            if (this[7] === null) {
                                var uputa = "";
                            } else {
                                var uputa = this[7];
                            }
                            var html = '<tr><td>' + this[0] + '</td>\n\
                                    <td>' + this[1] + '</td>\n\
                                    <td>' + this[3] + '</td>\n\
                                    <td>' + this[4] + '</td>\n\
                                    <td>' + this[5] + '</td>\n\
                                    <td>' + this[6] + '</td>\n\
                                    <td>' + uputa + '</td>\n\
                                    <td>' + this[8] + '</td>\n\\n\
                                    <td><a href="azuriranjeRezervacije.php?id=' + this[0] + '"><button>Ažuriraj</button></a></td>\n\
                                    <td><a href="../brisanjeRezervacije.php?id=' + this[0] + '"><button>Obriši</button></a></td></tr>';
                            $("#tijelo").append(html);
                        }
                    });
                }
            });
            break;
        case "Ažuriranje rezervacije":
            $("#grupa").empty();
            $.ajax({
                url: '../dohvacanje_podataka/dohvatGrupa.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        var html = '<option value="' + this[1] + '">' + this[1] + '</option>';
                        $("#grupa").append(html);
                    });
                }
            });
            break;
        case "Računi":
            $.ajax({
                url: 'dohvacanje_podataka/dohvatKorisnika.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        if (this[14] >= 5) {
                            var html = '<tr><td>' + this[0] + '</td>\n\
                                    <td>' + this[1] + '</td>\n\
                                    <td>' + this[2] + '</td>\n\
                                    <td>' + this[3] + '</td>\n\
                                    <td>' + this[4] + '</td>\n\
                                    <td><a href="otkljucavanjeRacuna.php?id=' + this[0] + '"><button>Otključaj</button></a></td>\n\
                                    <td><a href="blokiranjeRacuna.php?id=' + this[0] + '"><button>Blokiraj</button></a></td></tr>';
                            $("#tijelo").append(html);
                        }
                    });
                }
            });
            break;
        case "Kreiranje moderatora":
            $.ajax({
                url: '../dohvacanje_podataka/dohvatKorisnika.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        if (this[1] === '2') {
                            var html = '<tr><td>' + this[0] + '</td>\n\
                                    <td>' + this[1] + '</td>\n\
                                    <td>' + this[2] + '</td>\n\
                                    <td>' + this[3] + '</td>\n\
                                    <td>' + this[4] + '</td>\n\
                                    <td><a href="../promjeniUlogu.php?id=' + this[0] + '"><button>Kreiraj</button></a></td></tr>';
                            $("#tijelo").append(html);
                        }
                    });
                }
            });
            break;
        case "Dodjela moderatora":
            $("#grupa").empty();
            $.ajax({
                url: 'dohvacanje_podataka/dohvatGrupa.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        var html = '<option value="' + this[1] + '">' + this[1] + '</option>';
                        $("#grupa").append(html);
                    });
                }
            });
            $("#moderator").empty();
            $.ajax({
                url: 'dohvacanje_podataka/dohvatKorisnika.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        if (this[1] === '3') {
                            var html = '<option value="' + this[5] + '">' + this[5] + '</option>';
                            $("#moderator").append(html);
                        }
                    });
                }
            });
            break;
        case "Upload materijala":
            var kolacici = document.cookie.split(";");
            for (i = 0; i < kolacici.length; i++) {
                if (kolacici[i].includes("korisnikId")) {
                    var korisnikId = kolacici[i].split("=")[1];
                }
            }
            $("#rezervacija").empty();
            $.ajax({
                url: '../dohvacanje_podataka/dohvatRezervacija.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                        if (this[2] === korisnikId) {
                            var html = '<option value="' + this[0] + '">Rezervacija s ID-em ' + this[0] + '</option>';
                            $("#rezervacija").append(html);
                            ;
                        }
                    });
                }
            });
            break;
        case "Popis grupa":
            $.ajax({
                url: 'dohvacanje_podataka/dohvatGrupa.php',
                method: 'GET',
                datatype: 'json',
                success: function (data) {
                    var podaci = jQuery.parseJSON(data);
                    $.each(podaci, function () {
                            var html = '<tr><td>' + this[0] + '</td>\n\
                                    <td>' + this[1] + '</td>\n\
                                    <td>' + this[2] + '</td>\n\
                                    <td><a href="obrasci/azuriranjeGrupe.php?id=' + this[0] + '"><button>Ažuriraj</button></a></td></tr>';
                            $("#tijelo").append(html);
                    });
                }
            });
            break;
            /*default:
             alert("Stranica ne postoji!");
             break;*/
    }
});