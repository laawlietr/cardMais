const cep = document.getElementById("cepPac");
const rua = document.getElementById("ruaPac");
const bairro = document.getElementById("bairroPac");
const cidade = document.getElementById("cidadePac");
const estado = document.getElementById("estadoPac");
const message = document.getElementById("message");

cep.addEventListener("focusout", async () => {
    const apenasNum = /^[0-9]+$/;

    try {
        if(!apenasNum.test(cep.value)){
            throw{cep_erro: 'Cep Inválido'};
        }
        const response = await fetch(`https:\\viacep.com.br/ws/${cep.value}/json/`)

        if(!response.ok){
            throw await response.json();
        }

        const responseCep = await response.json();

        rua.value = responseCep.logradouro.toString();
        bairro.value = responseCep.bairro.toString();
        cidade.value = responseCep.localidade.toString();
        estado.value = responseCep.uf.toString();


    } catch (error) {
        if(error?.cep_erro){
            message.textContent = error.cep_erro;
            setTimeout(()=>{
                message.textContent = "";
            }, 5000)
        }
        
    } 
})


const cepF = document.getElementById("cepPacFam");
const ruaF = document.getElementById("ruaPacFam");
const bairroF = document.getElementById("bairroPacFam");
const cidadeF = document.getElementById("cidadePacFam");
const estadoF = document.getElementById("estadoPacFam");
const messageF = document.getElementById("messageFam");

cepF.addEventListener("focusout", async () => {
    const apenasNum = /^[0-9]+$/;

    try {
        if(!apenasNum.test(cepF.value)){
            throw{cep_erro: 'Cep Inválido'};
        }
        const response = await fetch(`https:\\viacep.com.br/ws/${cepF.value}/json/`)

        if(!response.ok){
            throw await response.json();
        }

        const responseCep = await response.json();

        ruaF.value = responseCep.logradouro;
        bairroF.value = responseCep.bairro;
        cidadeF.value = responseCep.localidade;
        estadoF.value = responseCep.uf;


    } catch (error) {
        if(error?.cep_erro){
            messageF.textContent = error.cep_erro;
            setTimeout(()=>{
                message.textContent = "";
            }, 5000)
        }
        
    } 
})