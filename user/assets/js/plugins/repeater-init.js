$(function () {
    "use strict";

    // Default
    $(".repeater-default").repeater();

    // Custom Show / Hide Configurations
    $(".file-repeater, .email-repeater").repeater({
        show: function () {
            $(this).slideDown();
        },
        hide: function (remove) {
            if (confirm("Are you sure you want to remove this item?")) {
                $(this).slideUp(remove);
            }
        },
    });
});




var room = 1;

function qustionForm() {
    room++;
    var objTo = document.getElementById("education_fields");
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "mb-3 removeclass" + room);
    var rdiv = "removeclass" + room;
    divtest.innerHTML =
        '<form class="row"><div class="col-12"><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname" placeholder="School Name"></div></div><div class="col-sm-2"> <div class="form-group"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' +
        room +
        ');"> <i class="ti ti-minus"></i> </button> </div></div></form>';

    objTo.appendChild(divtest);
}

function remove_education_fields(rid) {
    $(".removeclass" + rid).remove();
}
