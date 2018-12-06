var currDate = new Date();
var m = currDate.getMonth() + 1;
var y = currDate.getFullYear();
var calurl = window.location.href.split("site")[0] + "site/api/eventsApi.php";
var iurl = window.location.href.split("site")[0] + "site/api/insertEventApi.php";

$(document).ready(function() {
    getCal(m,y);

    var modal = document.getElementById('eventForm');
    var btn = document.getElementById("btn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    var submitBtn = document.getElementById("eventSubmit");
    submitBtn.onclick = function() {
        var title = document.getElementById("title").value;
        var eDate = document.getElementById("date").value;
        var location = document.getElementById("location").value;
        var description = document.getElementById("description").value;
        var createdby = document.getElementById("createdby").value;

        $.ajax({
            url: iurl,
            type: "POST",
            data: { title: title, eDate: eDate, location: location, description: description, createdby: createdby},
            async: true,
            dataType: "json",
            success: function(response) {
                document.getElementById("response").innerHTML = "Event Created!";
                document.getElementById("title").value = "";
                document.getElementById("date").value = "";
                document.getElementById("location").value = "";
                document.getElementById("description").value = "";
                document.getElementById("createdby").value = "";
            },
            error: function(error) {
                alert(error);
            }
        });
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
        url: calurl,
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

function handleFormSubmit(event) {
    event.preventDefault();
}
