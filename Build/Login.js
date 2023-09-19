function logar(){
    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

    if (login == "renan" && senha == "teste"){
        alert('Sucesso');
        location.href = "HomePage.html";
    }else{
        alert('Usuário ou senha incorretos')
    }
}