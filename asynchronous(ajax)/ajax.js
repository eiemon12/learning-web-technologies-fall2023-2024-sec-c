function createXHR() {

    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhr;
}

function checkEmailAvailability(email) {
    var xhr = createXHR();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                document.getElementById("emailAvailabilityMessage").innerHTML = xhr.responseText;
            } else {
                alert('Error: ' + xhr.status);
            }
        }
    };
    xhr.open("GET", "check_email.php?email=" + email, true);
    xhr.send();
}
