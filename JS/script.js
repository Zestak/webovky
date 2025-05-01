

// načtení data z localstorage do proměnné names; pokud je localStorage prázdný, tak do names se uloží prázdné pole
const names = getSavedNames();


//odeslání formuláře a uložení do localstorage pomocí proměnné names
let myForm = document.querySelector("#test-form");
myForm.addEventListener("submit", function (e) {
  e.preventDefault();

  names.push({
    id: uuidv4(),
    firstName: e.target.elements.firstName.value,
    adult: document.querySelector("#myCheckbox").checked
  });

e.target.elements.firstName.value = ""
myCheckbox.checked = false

  saveNames(names);
});

//vypisování zpět do stránky
let buttonToList = document.querySelector(".to-list")
buttonToList.addEventListener("click", function(e){

let namesFromStorage = localStorage.getItem("names")
let namesFromStorageJSON = JSON.parse(namesFromStorage)

console.log(namesFromStorageJSON)

namesFromStorageJSON.forEach(function(myName){
const oneNameHTML = generateHTMLstructure(myName)
document.querySelector(".list-names").appendChild(oneNameHTML)
})

})
window.addEventListener("storage", function(){
location.reload()

})