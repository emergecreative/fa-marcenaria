/* galeria(arr, dic); */
var array = window.location.pathname.split("/");

function openModal() {
    if (array[array.length - 1] == "projetos.html") {
        document.getElementById("myModal").style.display = "block";
    }
}

function closeModal() {
    if (array[array.length - 1] == "projetos.html") {
        document.getElementById("myModal").style.display = "none";
    }
}

function showSlides(n) {
    if (array[array.length - 1] == "projetos.html") {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
}

$(document).ready(function() {

    /* Slides página projetos */

    function confModal(cliente, limit = 5) {
        let conteudoModal_content = "";

        for (let i = 1; i <= limit; i++) {
            conteudoModal_content = conteudoModal_content + "<div class='mySlides'><div class='numbertext'></div><img src='./assets/img/clientes/" + cliente + "/" + i + ".png' style='width:100%'></div>";
        }

        return conteudoModal_content;
    }

    function minaturasModal(client, limit = 5) {
        let conteudo = "<div class='caption-container'><p id='caption'></p></div><div style='background-color:hsla(0, 0%, 100%, 0);' class='d-flex flex-row'>";
        for (let i = 1; i <= limit; i++) {
            conteudo += "<div class='column'><img class='demo cursor' src='./assets/img/clientes/" + client + "/" + i + ".png' style='width:100%' onclick='currentSlide(" + i + ")' alt=''></div>"
        }
        conteudo += "</div>";
        return conteudo;
    }

    document.addEventListener('keydown', function(e) {
        switch (e.keyCode) {
            case 37:
                if ($("#myModal").css("display") === "block") {
                    plusSlides(-1);
                }
                break;
            case 39:
                if ($("#myModal").css("display") === "block") {
                    plusSlides(1);
                }
                break;
            case 27:
                if ($("#myModal").css("display") === "block") {
                    closeModal();
                }
                break;
        }
    });

    AOS.init({
        once: true,
        mirror: true,
        easing: 'ease-out-back',
        duration: 1000,
    });

    var arr = ["smartfit", "bioritmo", "race", "paraguacu", "totus", "senteq", "mrc", "conato", "zodio", "viena", "brunella", "acai", "prada", "petz", "varandagriglia", "riachuelo", "microgym", "fitdance", "einstein", "tokstok", "embelleze"];

    var dic = {
        "bioritmo": "Bio Ritmo",
        "smartfit": "Smart Fit",
        "race": "Race",
        "paraguacu": "Paraguaçu",
        "totus": "Totus",
        "senteq": "Senteq",
        "mrc": "MRC",
        "conato": "Conato",
        "zodio": "Zôdio",
        "viena": "Viena",
        "brunella": "Brunella",
        "acai": "Assaí",
        "prada": "Prada",
        "petz": "Petz",
        "varandagriglia": "Varanda Griglia",
        "riachuelo": "Riachuelo",
        "microgym": "Micro Gym",
        "fitdance": "Fit Dance",
        "einstein": "Einstein",
        "tokstok": "TokStok",
        "embelleze": "Embelleze",
        "Dedalus": "Dedalus",
        "JAB": "JAB",
        "MRC": "MRC",
        "Orplan": "Orplan",
        "Race": "Race",
        "SilvaLeao": "Silva & Leão",
        "TM": "TM",
        "Tmonus": "Tmonus",
        "Totus": "Totus",
        "Vidya": "Vidya",
    };
    var loaded = 0;

    $(".botao").click(function(){
        $("li[esconder]").show();
        $(".div-botao").hide();
        $(".botao").hide();
      });

});