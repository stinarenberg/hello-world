function myFunction() {
    var x = document.getElementById("main-nav");
    if (x.style.display === "grid") {
        x.style.display = "none";
    } else {
        x.style.display = "grid";
    }

}
function hideFunction() {
    var hide = document.getElementById("box-container");

    if (hide.style.display === "none") {
        hide.style.display = "block";
    } else {
        hide.style.display = "none";
    }
}


function toggleBoxes() {
    const circleRightEl = documnent.getElementById('changingcircle--right');
    const circleWrongEl = documnent.getElementById('changingcircle--wrong');

    const circleRightIsExpanded = circleRightEl.classList.contains("changingcircle--expanded")

    // Om vi just nu visar den "korrekta" cirkeln
    if (circleRightIsExpanded) {
        // Tänk på att bevara övriga klasser
        // Dölja den korrekta cirkeln
        // Ta bort klassen changingcircle--expanded på rightEl
        // Visa den inkorrekta
        // Lägg till klassen changingcircle--expanded på wrongEl
    } else {

    }

}