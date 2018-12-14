var hide = document.getElementById('hide');
var otherInstitute = $("#other_institute");

otherInstitute.click(function(){
    hide.classList.toggle('hide')
  });

$(document).ready(function () {
    $('#submit').click(function() {
      checked = $("#event:checked").length;

      if(!checked) {
        alert("You must select atleast one event!");
        return false;
      }

    });
});