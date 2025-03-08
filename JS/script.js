let criminals = [
  {
    firstName: "Petr",
    secondName: "Zelenka",
    birth: 1976,
    licensePlate: "85C3322",
    address: "U sloupů 16",
    city: "Jihlava",
  },
  {
    firstName: "Jana",
    secondName: "Růžová",
    birth: 1996,
    licensePlate: "93K3922",
    address: "Malská 29",
    city: "České Budějovice",
  },
  {
    firstName: "Olga",
    secondName: "Hepnarová",
    birth: 1951,
    licensePlate: "2EP6328",
    address: "Milady Horákové 11",
    city: "Praha",
  },
];



// Uložíme data z políčka do proměnné
let filters = {
  searchText: "",
};
// filtr
let renderCriminals = function (ourCriminals, tryToFind) {
  let arrayResult = ourCriminals.filter(function (oneSuspect) {
    return oneSuspect.licensePlate
      .toLowerCase()
      .includes(tryToFind.searchText.toLowerCase());
  });
  console.log(arrayResult);

  document.querySelector("#idCrim").innerHTML = "";

  arrayResult.forEach(function (oneSuspect) {
    let paragraph = document.createElement("p");
    paragraph.innerHTML = `Jméno:    ${oneSuspect.firstName}, <br><br> Příjmení:    ${oneSuspect.secondName}, <br><br> Datum narození:     ${oneSuspect.birth}, <br><br> SPZ:     ${oneSuspect.licensePlate}, <br><br> Adresa:     ${oneSuspect.address}, <br><br> Mesto:   ${oneSuspect.city}
    `;

    document.querySelector("#idCrim").appendChild(paragraph);
  });
};

//Načteme data z políčka
let licensePlate = document.querySelector("#plate");

licensePlate.addEventListener("input", function (e) {
  filters.searchText = e.target.value;
  renderCriminals(criminals, filters);
});
