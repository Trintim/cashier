let cep = document.getElementById("input-zip_code");

function setValues(data) {
    if (!("erro" in data)) {
        document.getElementById("input-addrs").value = data.logradouro;
        document.getElementById("input-ngbh").value = data.bairro;
        document.getElementById("input-city").value = data.localidade;
        document.getElementById("input-state").value = data.uf;
        document.getElementById("input-country").value = "Brasil";
    }
}

function seachCep() {
    var cepValue = cep.value.replace(/\D/g, "");
    var validacep = /^[0-9]{8}$/;

    if (validacep.test(cepValue)) {
        var url = "https://viacep.com.br/ws/" + cepValue + "/json/";

        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                setValues(data);
            });
    }
}

cep.addEventListener("input", seachCep);
