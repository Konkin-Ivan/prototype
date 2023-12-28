let popup_close_block = document.querySelector('.popup_close_block');
let popup_background  = document.querySelector('.popup_background ');
$(popup_close_block).click(function(){
    $(popup_background).hide();
});
IMask(
  document.getElementById('phone'),
  {
    mask: '+{7}(000)-000-0000'
  }
)
$('#btn_login').click(function(){
    var phone = $('#phone').val();
    if (phone.length == 16) {
        $.ajax({
            type: 'POST',
            url: '/src/login_user.php',
            data: ({phone:phone}),
            dataType : 'json',
            success: function(msg){
                if (msg.error == '') {
                    console.log(msg.success);
                    if (msg.error == '') {
                        $(popup_background).show();
                    }
                } else {
                    console.log(msg.error);
                }
            }
        });
    }
});