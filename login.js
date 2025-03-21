document.getElementById("form1").addEventListener("submit", function(event){
    event.preventDefault();
    const formData = new FormData(this);
    
    for (const[name, value] of formData.entries()){
        console.log(`${name}: ${value}`);
    }
});
