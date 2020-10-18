$('.chapter-content').hide();

window.onload = function(){



    $('.chapter-name').on('click', function(){
        if($(this).next().is(':hidden')){
            $(this).next().slideDown();
            $(this).find('i').css('transform', 'rotate(90deg)');          
        }else{
            $(this).next().slideUp();
            $(this).find('i').css('transform', 'rotate(0deg)');  
        }      
    });
}

