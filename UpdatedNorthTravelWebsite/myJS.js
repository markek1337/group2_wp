function setColor (where, newColor) {
    if (where == "background")
    document.body.style.backgroundColor = newColor;
    else
    document.body.style.color = newColor;
}
function myjsfunction() {
    document.getElementById("demo").onclick = function() {myjsfunction()};

    function myjsfunction() {
      document.getElementById("demo").innerHTML = "Your request has been submitted.";
    }
}