async function enviar() {
    var formulario = document.getElementById("formulario")
    var data = new FormData(formulario)

    var req = await fetch("php/main.php",{
        method: "POST",
        body: data
    });

    var resposta = await req.json()
    alert(resposta.status + ": "+ resposta.message)


}