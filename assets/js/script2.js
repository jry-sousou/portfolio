window.onload = function () {
    let interrupteur = false
    let ul = document.querySelector("ul")
    var btn = document.querySelector(".menu")
    var tit = document.querySelector(".titre")

    /*MENU HAMBURGEUR -------------------------------------------------------------*/
    console.log(btn)
    btn.onclick = function () {

        console.log("Checkpoint 1")


        if (interrupteur == false) {

            ul.classList.remove("fadeout")
            ul.classList.add("fadein")
            tit.classList.remove("fadeout")
            tit.classList.add("fadein")





            interrupteur = true
        }

        else {
            console.log('Checkpoint 2')

            ul.classList.add("fadeout")
            ul.classList.remove("fadein")
            tit.classList.add("fadeout")
            tit.classList.remove("fadein")



            interrupteur = false
        }
        /*FIN DU MENU HAMBURGEUR -----------------------------------------------------*/


    }
 /*FIN DE SECTION A PROPOS -------------------------------------------------------*/




}







