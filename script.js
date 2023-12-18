const btnsZona = document.getElementsByName("btnsZona");
const divZona = document.getElementById("divZona");
const divEspec = document.getElementById("divEspec");
const divParc = document.getElementById("divParc");
const title = document.getElementById("title");
const btnVoltar = document.getElementById("btnVoltar");

let especs = ["Clínico Geral", "Radiologia", "Mamografia", "USG"];
let parceiros = [{
    nome: 'Clinica Santana',
    endereco: 'Rua Salete, 221',
    especialidade: 'Radiologia',
    codEspecia: "1"
}, {
    nome: 'Clinica Tucuruvi',
    endereco: 'Rua Salete, 300',
    especialidade: 'Mamografia',
    codEspecia: "2"
}];


function mostrarEspecs() {
    divZona.className = "d-grid gap-2 pt-3 d-none";


    for (let i = 0; i < especs.length; i++) {
        title.innerHTML = "<h1>Selecione a Especialidade:</h1>";
        const newButton = document.createElement('button');
        newButton.name = "btnsEspec";
        newButton.className = "btn btn-card-contra";
        newButton.type = "button";
        newButton.innerText = especs[i];
        newButton.id = "btn" + especs.indexOf(especs[i]);
        newButton.addEventListener("click", () => mostrarParc());

        divEspec.append(newButton);
    }
}


function mostrarParc() {
    console.log("Ok");

    title.innerHTML = "<h1>Selecione o Parceiro:</h1>";
    divEspec.innerHTML = "";

    for (let i = 0; i < parceiros.length; i++) {
        const newButton = document.createElement('button');
        newButton.name = "btnsParc";
        newButton.className = "btn btn-card-contra";
        newButton.type = "button";
        newButton.innerText = parceiros[i].nome + " - " + parceiros[i].endereco;

        divParc.append(newButton);
    }
}


btnVoltar.addEventListener("click", function () {
    divZona.className = "d-grid gap-2 pt-3 d-block";
    divEspec.innerHTML = "";
    divParc.innerHTML = "";
    title.innerHTML = "<h1>Selecione a Zona:</h1>";
})

for (let item of btnsZona) {
    item.addEventListener("click", mostrarEspecs);
}




