function blockingButton(){
    var q = validateY();
    if (q === "notNumber"){
        console.log("notNumber");
        document.getElementById("submitButton").disabled = true;
    }else if (q==="badNumber"){
        console.log("badNumber");
        document.getElementById("submitButton").disabled = true;
    }else {
        console.log("good");
        document.getElementById("submitButton").disabled = false;
    }

}
function validateY() {

    var s = document.getElementById("y_field").value;
    console.log(s);
    s = s.replace(",", ".");
    document.getElementById("y_field").value = s;

    console.log(parseFloat(s));
    if (s === parseFloat(s).toString()){
        if (s > 5 || s < -5 || Number.isNaN(s)) {
            return "badNumber";
        } else return "good"
    }else return "badNumber";

}
function click(){
    console.log("gg");
}

document.addEventListener("input",blockingButton);