function main() {
    var buttons = document.querySelectorAll(".buy-ticket");
    var overlay = document.querySelector("#overlay");
    buttons.forEach(btn => {
        btn.addEventListener("click", function () {
            overlay.style.display = "flex";
            clickOutside();
        })
    });
    //I'm using "click" but it works with any event
    
}

function clickOutside(){
    overlay.addEventListener('click', function (event) {
        var loginForm = null;
        var ticketForm = null;
        if(document.querySelector('#login-form') != null){
            loginForm = document.querySelector('#login-form').contains(event.target);
        } else if(document.querySelector('#ticket-form') != null) {
            ticketForm = document.querySelector('#ticket-form').contains(event.target);
        }
        if(loginForm != null && !loginForm){
            overlay.style.display = "none";
        } else if(ticketForm != null && !ticketForm){
            overlay.style.display = "none";
        }
    });
}
main();