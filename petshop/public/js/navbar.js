if(document.getElementById("navbarDropdown")){
    console.log(document.getElementById("navbarDropdown"))
    setTimeout(function(){
        document.getElementById("navbarDropdown").addEventListener("click", function(){
            console.log("asdf")
            document.getElementsByClassName("dropdown-menu-end")[0].style.display = "block";
        });
    },500);
}
