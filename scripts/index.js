//Hide Button function

$(function showHide() {
    $("#exampleCheck1").click(function () {
        if ($(this).is(":checked")) {
            $("#hiddenButton").show();
        } else {
            $("#hiddenButton").hide();
        }
    });
});

// Hide SideBar
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
