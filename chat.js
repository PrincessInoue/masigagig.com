document.querySelector("btn-cancel") .addEventListener("click", openForm);

function openForm(){
    document.getElementById("myForm").style.display = "block";
}

function closeForm(){
    document.getElementById("myForm").style.display = "none";
}