let ToDos = [{
  text: "Vynést koš",
  done: false
},
{
  text: "Upravit  svinstvo",
  done: false
},
{
  text: "Poslat rit na záchod",
  done: false
},
{
  text: "Nakoupit si v obchodech",
  done: false
},
{
  text: "Naučit se udit",
  done: false
}]

let ToDoLeft = ToDos.filter(function (oneToDo){
  return !oneToDo.done
})

console.log(ToDoLeft.length)

const paragraph = document.createElement("p");
paragraph.textContent = `Ještě zbývá udělat ${ToDoLeft.length} úkolů`;
document.querySelector("main").appendChild(paragraph);


for(let i = 0; i < ToDos.length; i++){
  const paragraph = document.createElement("p");
  paragraph.textContent = ToDos[i].text;
  document.querySelector("main").appendChild(paragraph);
}

document.querySelector(".MyBtn").addEventListener("click", function(event){
  console.log("clicked")
})


/*************
 * Filtrování
 *************/

const filters = {
  searchText: "",
};
//obecná filtrovací funkce

let renderToDos = function (ourToDos, weSearchFor) {
  let filteredToDos = ourToDos.filter(function (oneToDo) {
    return oneToDo.text.toLowerCase().includes(weSearchFor.searchText.toLowerCase());
  });
  console.log(filteredToDos);
  
  renderToDos(ToDos, filters);
};

// načtení textu z políčka
const searchText = document.querySelector("#task");
searchText.addEventListener("input", function (e) {
  filters.searchText = e.target.value;
  renderToDos(ToDos, filters);
  console.log(filters);
});
