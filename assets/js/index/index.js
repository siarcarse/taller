$(document).ready(function() {
    $.ajax({
        url: 'phps/users.php',
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data) {
        console.log('jhagsdkjgafskdgaksgd');
        console.log(data);
    });
});