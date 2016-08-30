$(document).ready(function(){
    
    $('#chatForm').submit(function () {

        if (!$('#messageInput').val()) {
            alert('Enter message');
            return false;
        }

        $.ajax({
            type: "POST",
            data: {
                message: $('#messageInput').val()
            },
            success: function (data) {
                $('#messageInput').val('');
                if (data.success){
                    alert('Ok');
                }
            }
        });
        return false;
    });
});

setInterval(function(){
    $.ajax({
        url: 'index.php?r=site%2Fget-messages',
        success: function (data) {
            var respone = JSON.parse(data);
            
            
            if (respone.success){
                
                var html = '';
                
                $.each(respone.message, function (key, value) {
                    html += '<tr><td>' + value.created +'</td>'+
                    '<td>' + value.text + '</td></tr>';
                });                
                console.log(html);
                
                $('#messageDiv').html(html);
            }
        }
    });
    return false;
}, 3000);