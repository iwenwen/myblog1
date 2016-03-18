$(function(){
    $('#wrap .common').on('focus',function(){
        this.value="";
        $(this).removeClass('gray').addClass('black');
    }).on('blur',function(){
        if(this.value==""){
            this.value=this.defaultValue;
            $(this).removeClass('black').addClass('gray');
        }
    });

});