document.addEventListener("DOMContentLoaded", function() {
    const apiUrl = 'https://catfact.ninja/fact';

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            document.getElementById("random-cat-fact").innerText = data.fact;
        })
        .catch(error => {
            console.error("error");
            document.getElementById("random-cat-fact").innerText = "failed";
        });


});