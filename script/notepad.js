let button = $('.notepad-btn')
let notepad = $('.notepad')

button.click(() => { 
    if(notepad.css("display") == 'block'){
        notepad.css("display", "none")
    }
    else{
        notepad.css("display", "block")
    }
});
