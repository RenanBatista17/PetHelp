function Agendar(){
    location.href = "Agendamento.html";
}
function showText(petId) {
    var textElement = document.getElementById(petId);
    if (textElement) {
        textElement.style.display = 'block';
    }
}

function hideText(petId) {
    var textElement = document.getElementById(petId);
    if (textElement) {
        textElement.style.display = 'none';
    }
}