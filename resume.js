document.getElementById("trans").addEventListener("mouseover", over);
document.getElementById("trans1").addEventListener("mouseover", over);
document.getElementById("trans2").addEventListener("mouseover", over);
document.getElementById("trans3").addEventListener("mouseover", over);
document.getElementById("trans4").addEventListener("mouseover", over);
document.getElementById("trans5").addEventListener("mouseover", over);
document.getElementById("trans6").addEventListener("mouseover", over);

document.getElementById("trans").addEventListener("mouseout", out);
document.getElementById("trans1").addEventListener("mouseout", out);
document.getElementById("trans2").addEventListener("mouseout", out);
document.getElementById("trans3").addEventListener("mouseout", out);
document.getElementById("trans4").addEventListener("mouseout", out);
document.getElementById("trans5").addEventListener("mouseout", out);
document.getElementById("trans6").addEventListener("mouseout", out);


function over() {
    
    document.getElementById("trans").style.color = "green";
    document.getElementById("trans1").style.color = "green";
    document.getElementById("trans2").style.color = "green";
    document.getElementById("trans3").style.color = "green";
    document.getElementById("trans4").style.color = "green";
    document.getElementById("trans5").style.color = "green";
    document.getElementById("trans6").style.color = "green";
}

function out() { 
    document.getElementById("trans").style.color = "rgb(3, 3, 75)";
    document.getElementById("trans1").style.color = "rgb(3, 3, 75)";
    document.getElementById("trans2").style.color = "rgb(3, 3, 75)";
    document.getElementById("trans3").style.color = "rgb(3, 3, 75)";
    document.getElementById("trans4").style.color = "rgb(3, 3, 75)";
    document.getElementById("trans5").style.color = "rgb(3, 3, 75)";
    document.getElementById("trans6").style.color = "rgb(3, 3, 75)";
}