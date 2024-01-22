
var Jason;


const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  Jason = JSON.parse(this.responseText);
};
xmlhttp.open("GET", "parceiros.json");
xmlhttp.send();






for (let i = 0; i < Jason.especialidades.length ; i++) 
{
    const newButton = document.createElement('input');
    newButton.name = "btnsEspec";
    newButton.className = "form-check-input";
    newButton.type = "check";
    newButton.value = Jason.especialidades[i];
    newButton.id = "btn" + Jason.especialidades.indexOf(Jason.especialidades[i]);

    divEspec.append(newButton);    
}



