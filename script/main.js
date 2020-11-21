$('.chapter-content').hide();

var TDLclick = $('#upperTDL');
var TDLlist = $('#lowerTDL');
var TDL = $('#toDoList');

$('.chapter-name').on('click', function(){
    if($(this).next().is(':hidden')){
        $(this).next().slideDown();
        $(this).find('i').css('transform', 'rotate(90deg)');          
    }else{
        $(this).next().slideUp();
        $(this).find('i').css('transform', 'rotate(0deg)'); 
    }      
});

function pullUp(){
    for (let i = 0; i <= 420; i++){
        TDL.css("height", (i + 50) + "px");
        TDL.css("bottom", (420 - i) + "px");
    }
}

function pullDown(){
    for (let i = 0; i <= 420; i++){
        TDL.css("height", (470 - i) + "px");
    } 
}

// var leTacosCinqViandesCinqSauceSHINY = TDLclick.addEventListener("click", function(){TDL.style.bottom == '0px' ? (setTimeout(function(){TDLlist.style.display = 'none'} ,1000), TDL.style.bottom = '-420px') : (TDL.style.bottom = '0px', TDLlist.style.display = 'block');});

var leTacosCinqViandesCinqSauces = TDLclick.on("click", function(){TDL.css("height") == '470px' ? (pullDown()) : (pullUp());});
