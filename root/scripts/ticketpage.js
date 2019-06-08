function main() {
    var buttons = document.querySelectorAll(".buy-ticket");
    var overlay = document.querySelector("#overlay");
    buttons.forEach(btn => {
        btn.addEventListener("click", function () {
            overlay.style.display = "flex";
            if (btn == buttons[0]) {
                if (document.querySelector(".no-camp") != null) {
                    document.querySelector(".camp").style.display = "none";
                    document.querySelector(".no-camp").style.display = "block";
                }
            } else {
                if (document.querySelector(".camp") != null) {
                    document.querySelector(".no-camp").style.display = "none";
                    document.querySelector(".camp").style.display = "block";
                }
            }
            clickOutside();
        })
    });
    if (window.location.href.indexOf("error=invalidIBAN2") > -1) {
        buttons[1].click();
    } else if (window.location.href.indexOf("error=invalidIBAN") > -1){
        buttons[0].click();
    }
    //I'm using "click" but it works with any event

}

function clickOutside() {
    overlay.addEventListener('click', function (event) {
        var loginForm = null;
        var ticketForm = null;
        if (document.querySelector('#login-form') != null) {
            loginForm = document.querySelector('#login-form').contains(event.target);
        } else if (document.querySelector('#ticket-form') != null) {
            ticketForm = document.querySelector('#ticket-form').contains(event.target);
        }
        if (loginForm != null && !loginForm) {
            document.querySelector('#overlay').style.display = "none";
        } else if (ticketForm != null && !ticketForm) {
            document.querySelector('#overlay').style.display = "none";
        }
    });
}
main();