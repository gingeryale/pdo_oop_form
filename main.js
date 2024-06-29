$(function(){
    $('.container_register').hide();
    $('#show_register_form').click(function(e){
        e.preventDefault();
        $('.container_login').hide();
        $('.container_register').show();
    });

    $('#show_login_form').click(function(e){
        e.preventDefault();
        $('.container_login').show();
        $('.container_register').hide();
    });
});