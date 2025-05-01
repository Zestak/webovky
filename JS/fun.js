const getSavedNames = function () {
    const myNames = localStorage.getItem("names");
    console.log('Retrieving names');
    if (myNames !== null) {
      return JSON.parse(myNames);
    } else { 
      return [];
    }
  }


const saveNames = function (names) {
    console.log('Saving names:', names);
   localStorage.setItem("names", JSON.stringify(names));
}


const generateHTMLstructure = function(oneName){
    const newDiv = document.createElement("div")
    const newLink = document.createElement("a")
    const button = document.createElement("button")

    button.textContent = "X"
    newDiv.appendChild(button)

    button.addEventListener("click", function(e){
        e.target.parentNode.remove() // Remove the parent element (the div)
        removeNames(names, oneName.id)
        saveNames(names)
    })

    newLink.textContent = oneName.firstName
    if(oneName.adult === true){
        newLink.classList.add("adult")
    } else {
        newLink.classList.add("not-adult")
        
    }

    newLink.setAttribute("href", `/edit.html#${oneName.id}`)

    newDiv.appendChild(newLink)
    return newDiv


    }
  




const removeNames = function(ourNames, id){
    const index = ourNames.findIndex(function(NameIWantToCheck){
        return NameIWantToCheck.id === id
    }) 
if (index > -1) {
    ourNames.splice(index, 1)
    saveNames(ourNames)
   
}

    }

    const toListAgain = function(){
     document.querySelector(".list-names").innerHTML = ""

     let newNames = getSavedNames()
    
newNames.forEach(function(oneName){

    const newContent = generateHTMLstructure(oneName)
    document.querySelector(".list-names").appendChild(newContent)

     })
    }