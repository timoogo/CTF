$('.chapter-content').hide();
let rightmenu = $('.right-menu');
let chaptermenu = $('.chapter-menu');
let TDLclick = document.getElementById('upperTDL')
let TDLlist = document.getElementById('lowerTDL')
let TDL = document.getElementById('toDoList')

    rightmenu.on('click', function(){
        console.log($(this).attr("class"));
        if($(this).hasClass('active')){
            chaptermenu.css(
                {
                "transform": "translate(-470px,0)",
                 "transition": "0.5s",}
            );
            $(this).removeClass('active');
            $(this).addClass('inactive');
            
        } else if($(this).hasClass('inactive')){
            chaptermenu.css(
                {
                    "transform": "translate(0,0)",
                    "transition": "0.5s",}
                    );
                    $(this).removeClass('inactive');
                    $(this).addClass('active');
        }

        
    })
    $('.chapter-name').on('click', function(){
        if($(this).next().is(':hidden')){
            $(this).next().slideDown();
            $(this).find('i').css('transform', 'rotate(90deg)');          
        }else{
            $(this).next().slideUp();
            $(this).find('i').css('transform', 'rotate(0deg)'); 
        }      
    });


let leTacosCinqViandesCinqSauce = TDLclick.addEventListener("click", function(){TDL.style.bottom == '0px' ? (setTimeout(function(){TDLlist.style.display = 'none'} ,1000), TDL.style.bottom = '-423px') : (TDL.style.bottom = '0px', TDLlist.style.display = 'block');});

