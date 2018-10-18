var currDate = new Date();
var m = currDate.getMonth() + 1;
var y = currDate.getFullYear();

$(document).ready(function() {
    getCal(m,y);
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
        url: "http://webdev.cs.uwosh.edu/students/czosea72/site/api/eventsApi.php",
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
