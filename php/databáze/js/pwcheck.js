const pw1 = document.querySelector(".pw1")
const pw2 = document.querySelector(".pw2")
const paragraphText = document.querySelector (".result-text")


pw1.addEventListener("input", () => {
    const pw1Value=pw1.value
    const pw2Value=pw2.value
 
    if(pw1Value === pw2Value){
        paragraphText.textContent="Hesla jsou shodná"
        paragraphText.classList.add("valid")
        paragraphText.classList.remove("invalid")
    } else {
paragraphText.textContent = "Hesla nejsou shodná"
paragraphText.classList.remove("valid")
paragraphText.classList.add("invalid")
    }
    if (pw1Value === " " && pw2Value === ""){
    paragraphText.textContent = ""
    }
})

 
pw2.addEventListener("input", () => {
    const pw1Value=pw1.value
    const pw2Value=pw2.value

    if(pw1Value === pw2Value){
        paragraphText.textContent="Hesla jsou shodná"
        paragraphText.classList.add("valid")
        paragraphText.classList.remove("invalid")
    } else {
paragraphText.textContent = "Hesla nejsou shhhhodná"
paragraphText.classList.remove("valid")
paragraphText.classList.add("invalid")
    }
     if (pw1Value === " " && pw2Value === ""){
    paragraphText.textContent = ""
    }
})