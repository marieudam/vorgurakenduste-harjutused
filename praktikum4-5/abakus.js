window.onload = function () {

	var beads = document.getElementsByClassName("bead");

	for (var i = 0; i < beads.length; i++) {
        beads[i].onclick = function () {
            changeLocation(this);
        }
    }

    function changeLocation(bead) {
        if (window.getComputedStyle(bead).getPropertyValue("float") == "right"){
            bead.style.cssFloat = "left";
        } else {
            bead.style.cssFloat = "right";
        	}
    	}
    	
}