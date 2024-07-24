// product slider opening function

function SliderOne() {
    var x = document.getElementById("catogery");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function SliderTwo() {
    var x = document.getElementById("catogeryOne");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function SliderThree() {
    var x = document.getElementById("catogeryThree");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function SliderFour() {
    var x = document.getElementById("catogeryFour");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function SliderFive() {
    var x = document.getElementById("catogeryFive");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function SliderSix() {
    var x = document.getElementById("catogerySix");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

// alert modal

var alertModal = document.getElementById("alertModal");

function alertOpen() {
    alertModal.style.display = "block"
}


// modal

var modal = document.getElementById("myModal");

var span = document.getElementById("modelClose");

function ModalOpen() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



var DimModal = document.getElementById("DimensionModal");
var DimClose = document.getElementById("dimClose");

function DimModalOpenCableTrayAngular() {
    DimModal.style.display = "block";
}

DimClose.onclick = function() {
    DimModal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == DimModal) {
        DimModal.style.display = "none";
    }
}



var DimModal_one = document.getElementById("cableTrunkingModal");
var DimClose_one = document.getElementById("dimClose_one");

function DimModalOpen() {
    DimModal_one.style.display = "block";
}

DimClose_one.onclick = function() {
    DimModal_one.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == DimModal_one) {
        DimModal_one.style.display = "none";
    }
}


// var DimModalAngular = document.getElementById("cableTrunkingAccessoriesModal");
// var DimCloseAngluar = document.getElementById("dimCloseTrunking");

// function DimModalAngularAccessoriesOpen() {
//     DimModalAngular.style.display = "block";
// }

// DimCloseAngluar.onclick = function() {
//     DimModalAngular.style.display = "none";
// }
// window.onclick = function(event) {
//     if (event.target == DimModalAngular) {
//         DimModalAngular.style.display = "none";
//     }
// }


var DimPipeClambs = document.getElementById("pipeClambsModal");
var DimClosePipeClambs = document.getElementById("pipeClambs");

function DimModalPipeClambsOpen() {
    DimPipeClambs.style.display = "block";
}

DimClosePipeClambs.onclick = function() {
    DimPipeClambs.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == DimPipeClambs) {
        DimPipeClambs.style.display = "none";
    }
}





//adding product name into the modal text area
var productArray = [];


function ProductDetails(name) {
    //console.log("Bim tesing", name)
    productArray.push(name)
        //console.log(productArray)
    document.getElementById("products").value = productArray;
}

// function share() {
//     if (navigator.share === undefined) {
//         alert('Undefined!');
//     } else {
//         alert('Sharing!');
//         navigator.share({ name: 'Product name', productCode: 'abcd' });
//     }
// }

// Products Form        

$('body').on('submit', '#productForm', function(e) {
    // $('#contact_loader').fadeIn(400);
    e.preventDefault();

    // To Check reCAPTCHA
    // var recaptcha = $("#g-recaptcha-response").val();
    // if (recaptcha === "") {
    //    e.preventDefault();
    //    $('#contact_captcha_msg').fadeIn(200);
    //    setTimeout( function(){
    //      $('#contact_captcha_msg').fadeOut(200);
    //    }, 3000)
    //    return 0;
    // }

    // var that = $(this);
    $.ajax({
        type: 'post',
        url: 'productMail.php',
        data: $(this).serialize(),
        global: true,
        success: function(data) {
            // $('#contact_loader').fadeOut(200);
            //$("#contactForm").hide(200);
            // $('#contact_success_msg').fadeIn(200);
            // setTimeout(function() {
            //     $('#contact_success_msg').fadeOut(400);
            // }, 4300);var modal = document.getElementById("myModal");

            var span = document.getElementById("modelClose");

            modal.style.display = "block";
            swal("Thank you!", "We will get back to you soon!")
                //reset form
            $("#productForm")[0].reset();
            // grecaptcha.recaptchaeset();
            // grecaptcha.reset();
        },

        error: function(data) {
            swal("Oops!", "Something went wrong, you should choose again!", "error");
        }
    });
});