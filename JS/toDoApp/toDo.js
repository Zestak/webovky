let ToDos = [
  { text: "Vynést koš", done: false },
  { text: "Upravit svinstvo", done: false },
  { text: "Poslat rit na záchod", done: false },
  { text: "Nakoupit si v obchodech", done: false },
  { text: "Naučit se udit", done: true },
];

// Count and display the number of unfinished tasks
let ToDoLeft = ToDos.filter(function (oneToDo) {
  return !oneToDo.done;
});

// Render all tasks initially inside #results-toDos
ToDos.forEach(function (oneToDo) {
  const paragraph = document.createElement("p");
  paragraph.textContent = oneToDo.text;
  document.querySelector("#results-toDos").appendChild(paragraph);
});

// Add event listener to the button
document.querySelector(".MyBtn").addEventListener("click", function (event) {
  console.log("clicked");
});
/***********
 * Filtrování
 ***********/

// Pro ukládání textu z vyhledávacího políčka
const filters = {
  searchingText: "",
};

// Obecná filtrovací funkce
let renderToDos = function (ourToDos, weSearching) {
  let ourResults = ourToDos.filter(function (oneToDo) {
    return oneToDo.text
      .toLowerCase()
      .includes(weSearching.searchingText.toLowerCase());
  });

document.querySelector("#toDos-left").innerHTML = "";


let leftToDos = ourResults.filter(function(oneToDo) {
  return !oneToDo.done
})

console.log(leftToDos.length);

let paragraph = document.createElement("p");
paragraph.textContent = `Ještě zbývá udělat ${leftToDos.length} úkolů`;
document.querySelector("#toDos-left").appendChild(paragraph);


  document.querySelector("#results-toDos").innerHTML = "";

  ourResults.forEach(function (oneResult) {
    let paragraph = document.createElement("p");
    paragraph.textContent = oneResult.text;
    document.querySelector("#results-toDos").appendChild(paragraph);
  });
};

// Načítáme text z políčka
let searchText = document.querySelector("#search-text");
searchText.addEventListener("input", function (event) {
  filters.searchingText = event.target.value;

  // Voláme filtrovací funkci
  renderToDos(ToDos, filters);
});
