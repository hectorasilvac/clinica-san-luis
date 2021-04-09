window.onload = function () {
    showPatients();
};

function runAjax(divId, method, url, body = null) {
    let ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById(divId).innerHTML = this.responseText;
        }
    }

    if( method == 'post' ) {
        ajax.open('POST', url, true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send(body);
    } else if( method == 'get' ) {
        ajax.open('GET', url, true);
        ajax.send();
    }
}

function showPatients() {
    runAjax('content-page', 'get', './templates/paciente/read.html.php');
}

function showRegisters() {
    runAjax('content-page', 'get', './templates/registro/read.html.php');
}

function addPatient() {
    runAjax('content-page', 'get', './templates/paciente/edit.html.php');
}

function addRegister() {
    runAjax('content-page', 'get', './templates/registro/edit.html.php');
}

function editPatient(value) {
    runAjax('content-page', 'post', './templates/paciente/edit.html.php', `id=${value}`);
}

function editRegister(value) {
    runAjax('content-page', 'post', './templates/registro/edit.html.php', `id=${value}`);
}

function deletePatient(value) {
    runAjax('content-page', 'post', '../crud/paciente/delete.php', `id=${value}`);
}

function deleteRegister(value) {
    runAjax('content-page', 'post', '../crud/registro/delete.php', `id=${value}`);
}

function viewRegisters(value) {
    runAjax('content-page', 'post', './templates/registro/read.html.php', `id=${value}`);
}

function goHome() {
    window.location = "../index.php";
}

