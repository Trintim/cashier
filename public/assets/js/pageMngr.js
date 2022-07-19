var current = 0;

start(current);

function start(current) {
    var steps = document.getElementsByClassName("step");
    for (let i = 0; i < steps.length; i++) {
        steps[i].style.display = "none";
    }

    var back = document.getElementById("back");
    if (back !== null) {
        back.style.display = "none";
    }

    document.getElementById("submit").style.display = "none";
    showTab(current);
}

function showTab(current) {
    var steps = document.getElementsByClassName("step");

    if (current == steps.length - 1) {
        steps[current].style.display = "flex";
        document.getElementById("next").style.display = "none";
        document.getElementById("submit").style.display = "block";

        var back = document.getElementById("back");
        if (back !== null) {
            back.style.display = "block";
            if (back.classList.contains("next2")) {
                back.classList.remove("next2");
            }
        }

        current = 0;
    } else {
        document.getElementById("next").style.display = "block";
        document.getElementById("submit").style.display = "none";

        var back = document.getElementById("back");
        if (back !== null) {
            if (current != 0) {
                var next = document.getElementById("next");
                if (!next.classList.contains("next2")) {
                    next.classList.add("next2");
                }
                back.style.display = "block";
                if (!back.classList.contains("next2")) {
                    back.classList.add("next2");
                }
            } else {
                var next = document.getElementById("next");
                if (next.classList.contains("next2")) {
                    next.classList.remove("next2");
                }
                back.style.display = "none";
            }
        }

        steps[current].style.display = "flex";
    }
}

function checkPwrd() {
    var password = document.getElementById("password").value;
    var c_password = document.getElementById("c-password").value;

    if (password !== "" && password === c_password) {
        return true;
    }

    return false;
}

function nextPrev() {
    var steps = document.getElementsByClassName("step");

    var password = document.getElementById("password");
    var CEP = document.getElementById("input-zip_code");

    if (password !== null) {
        if (!checkPwrd()) {
            alert("Senhas não conferem ou estão vazias");
            return;
        }
    } else if (CEP !== null) {
        seachCep();
    }

    steps[current].style.display = "none";
    current++;
    showTab(current);
}

function anteriorPrev() {
    if (current > 0) {
        var steps = document.getElementsByClassName("step");
        steps[current].style.display = "none";
        current--;
        showTab(current);
    }
}
