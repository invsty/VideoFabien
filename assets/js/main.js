document.addEventListener("DOMContentLoaded",function(){
    let limite = 12;
    const main = document.getElementsByTagName('main')[0];
    window.onscroll = function(event) {
       
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            console.log("bas de page");
            fetch("libraries/infinite.php", {
                method: "POST",
                headers: {'Content-Type':'application/x-www-form-urlencoded'},
                body: "limite="+limite,
            })
            .then(function(response) {
                limite += 12;
                return response.text();
            })
            .then(function(text) {
                main.innerHTML +=text;
            })
            
        }
    };
});