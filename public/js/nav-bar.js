

function menu() {
    var x = document.getElementById("navlist");
    if (x.className === "navigation") {
      x.className += " responsive";
    } else {
      x.className = "navigation";
    }
  }
