const nameID = location.hash.substring(1);
let names = getSavedNames();

let searchedName = names.find(function (oneName) {
    return oneName.id === nameID;
});

if (searchedName === undefined) {
    location.assign("index.html");
}

document.querySelector("#edited-name").value = searchedName.firstName

let editingForm = document.querySelector("#editing-form");
editingForm.addEventListener("submit", function (e) {
    e.preventDefault();
  

    searchedName.firstName = e.target.elements['edited-name'].value

    saveNames(names)

});



window.addEventListener("storage", function(e){
   if(e.key === "names"){
    names = JSON.parse(e.newValue)
   }
   let searchedName = names.find(function (oneName) {
    return oneName.id === nameID;
});

if (searchedName === undefined) {
    location.assign("index.html");
}

document.querySelector("#edited-name").value = searchedName.firstName 
})