var currDate = new Date();
var m = currDate.getMonth() + 1;
var y = currDate.getFullYear();
var url = window.location.href.split("site")[0] + "site/api/eventsApi.php";

$(document).ready(function() {
    getCal(m,y);

    var modal = document.getElementById('eventForm');
    // Get the button that opens the modal
    var btn = document.getElementById("btn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

function setVals(chg) {
	if(chg == -1) {
		if(m == 1) {
			y--;
			m = 12;
		} else {
			m--;
		}
	} else if (chg == 1) {
		if(m==12) {
			y++;
			m = 1;
		} else {
			m++;
		}
	}

	getCal(m,y);
}

function getCal(m,y) {
	$.ajax({
        url: url,
        type: "POST",
        data: { m: m, y: y},
        async: true,
        dataType: "json",
        success: function(response) {
            document.getElementById("content-window").innerHTML = response;
        },
        error: function(error) {
            alert(error);
        }
    });
}
