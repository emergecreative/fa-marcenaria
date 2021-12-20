/* galeria(arr, dic); */

function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
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

$(document).ready(function() {

    function confModal(cliente, limit = 5) {
        let conteudoModal_content = "";

        for (let i = 1; i <= limit; i++) {
            conteudoModal_content = conteudoModal_content + "<div class='mySlides'><div class='numbertext'></div><img src='./assets/img/clientes/" + cliente + "/" + i + ".png' style='width:100%'></div>";
        }

        return conteudoModal_content;
    }

    function minaturasModal(client, limit = 5) {
        let conteudo = "<div class='caption-container'><p id='caption'></p></div><div class='d-flex flex-row'>";
        for (let i = 1; i <= limit; i++) {
            conteudo += "<div class='column'><img class='demo cursor' src='./assets/img/clientes/" + client + "/" + i + ".png' style='width:100%' onclick='currentSlide(" + i + ")' alt=''></div>"
        }
        conteudo += "</div>";
        return conteudo;
    }



    /* class Slides {

        constructor(slideIndex = 1, slides = "mySlides", dots = "demo", caption = "#caption", modal = "#myModal") {
            this.modal = modal
            this.slideIndex = slideIndex;
            this.slides = document.getElementsByClassName(slides);
            this.dots = document.getElementsByClassName(dots);
            this.captionText = $(caption);

            console.log("Fui chamada")
        }

        openModal() {
            $(this.modal).css("display", "block");
        }

        closeModal() {
            $(this.modal).css("display", "none");
        }

        showSlides(n) {
            var i;
            if (n > this.slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = this.slides.length
            }
            for (i = 0; i < this.slides.length; i++) {
                this.slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                this.dots[i].className = this.dots[i].className.replace(" active", "");
            }
            this.slides[slideIndex - 1].style.display = "block";
            this.dots[slideIndex - 1].className += " active";
            this.captionText.innerHTML = this.dots[slideIndex - 1].alt;
        }

        currentSlide(n) {
            showSlides(slideIndex = n);
        }


        plusSlide(n) {
            this.showSlides(this.slideIndex += n)
        }


    } */




    $(".linke").click(function(e) {
        e.preventDefault();

        let conteudo_interior = "";
        var theClass = $(this).attr("id").split("-")[0]; // "this" is the element clicked
        var theNumber = $(this).attr("id").split("-")[2];
        /* alert(theClass); */

        conteudo_interior += confModal(theClass, theNumber) + "<a class='prev' onclick='plusSlides(-1)'>&#10094;</a><a class='next' onclick='plusSlides(1)'>&#10095;</a><div class='caption-container'><p id='caption'></p></div>";
        conteudo_interior += minaturasModal(theClass, theNumber);


        $(".modal-content").html(conteudo_interior);

        openModal();
        currentSlide(1);
        /* return slide; */
    });

    document.addEventListener('keydown', function(e) {
        switch (e.keyCode) {
            case 37:
                alert('left');
                break;
            case 39:
                alert('right');
                break;
        }
    });

    /* function linkTest(e) {
        openModal();

    } */



});