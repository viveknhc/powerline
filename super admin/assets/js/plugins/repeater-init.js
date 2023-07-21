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
        '<form class="row"><div class="col-10 pb-3"><div class="form-group"><label class="form-label">Question</label><textarea name="" id="" cols="30" rows="" class="form-control"></textarea> </div></div><div class="col-5 pb-3"><div class="form-group"><label  class="form-label">Option 1</label><input name="" id="" cols="30" rows="" class="form-control"></input> </div></div><div class="col-5 pb-3"><div class="form-group"><label  class="form-label">Option 2</label><input name="" id="" cols="30" rows="" class="form-control"></input> </div></div><div class="col-5 pb-3"><div class="form-group"><label  class="form-label">Option 3</label><input name="" id="" cols="30" rows="" class="form-control"></input> </div></div><div class="col-5 pb-3"><div class="form-group"><label  class="form-label">Option 4</label><input name="" id="" cols="30" rows="" class="form-control"></input> </div></div><div class="col-10 pb-3"><div class="form-group"><label  class="form-label">Answers</label>  <select class="select2 form-control select2-hidden-accessible" style="width: 100%; height: 36px" data-select2-id="select2-data-1-so89" tabindex="-1" aria-hidden="true"><option data-select2-id="select2-data-3-3q4s">Answer 1</option><option data-select2-id="select2-data-3-3q4s">Answer 2</option><option data-select2-id="select2-data-3-3q4s">Answer 3</option><option data-select2-id="select2-data-3-3q4s">Answer 4</option></select></div></div><div class="col-sm-2"><div class="form-group"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' +
        room +
        ');"> <i class="ti ti-minus"></i> </button> </div></div></form>';

    objTo.appendChild(divtest);
}

function remove_education_fields(rid) {
    $(".removeclass" + rid).remove();
}
