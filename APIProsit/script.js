document.getElementById("ville").onclick = function () // Interception du click sur le bouton
{
    var xhr = new XMLHttpRequest();
    var url = "https://vicopo.selfbuild.fr/cherche/" + document.getElementById("CP").value;


    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var data = this.response;

            var x = data.cities[0].city

            document.getElementById("ville").value = x;

        };
    };

    xhr.open("GET", url, true);
    xhr.responseType = "json";
    xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};