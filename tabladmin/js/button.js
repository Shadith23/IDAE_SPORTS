document.getElementById("submit").addEventListener("click", toggle);

var table = document.getElementById("table");

function toggle(e){
    // e.preventDefault();
    localStorage.setItem("hidden_button", "hidden")
    table.classList.add("hidden");
    console.log("click");
}