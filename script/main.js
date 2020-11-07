$('.chapter-content').hide();

var TDLclick = document.getElementById('upperTDL')
var TDLlist = document.getElementById('lowerTDL')
var TDL = document.getElementById('toDoList')


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

var leTacosCinqViandesCinqSauce = TDLclick.addEventListener("click", function(){TDL.style.bottom == '0px' ? (setTimeout(function(){TDLlist.style.display = 'none'} ,1000), TDL.style.bottom = '-423px') : (TDL.style.bottom = '0px', TDLlist.style.display = 'block');});


// term