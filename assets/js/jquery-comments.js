function render(data) {
    var html = '<div class="address mt-3"><i class="bi bi-person-badge"></i><h4>'+data.subject+'</h4><p class="lead"> <b>19:43 WIB </b> &mdash; <span>'+data.message+'</span></p></div>'
    $('#content-comment').append(html);
}

$(document).ready(function () {
   
    var comment = [{
        "subject": "Alfin Sugestian",
        "message": "Selamat yaaa!!",

    }];
    for (var i = 0; i < comment.length; i++) {
        render(comment[i]);
    }
    $('#btn-whises').click(function () {
        var addComment = {
            "subject": $('#subject').val(),
            "message": $('#message').val(),
        };
        console.log(addComment);
        comment.push(addComment);
        render(addComment);
    });
});