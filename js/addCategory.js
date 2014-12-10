var title="";
$(document).ready(function() {
    $('.addInventory').click(function() {
        title=$("#titleInput").val();
        postData(title).done(function(result) {
            window.location.href = "\\wwwroot\\Presentation/home.php";
        });
    });
});

function postData(title) {

    return $.ajax({
        url: 'index.php',
        type: 'post',
        data: {'title': title, 'add': "add"},
        success: function(data, status) {
            window.location.href = "\\wwwroot\\Presentation/home.php";
        },
        error: function(xhr, desc, err) {
            console.log("Not Successful ajax call");
        }

    });

}