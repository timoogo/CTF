let button = $('.notepad-btn')
let notepad = $('.notepad')
let drag_note = $('#notepad');

button.click(() => {
    if (notepad.css("display") == 'block') {
        notepad.css("display", "none")
    } else {
        notepad.css("display", "block")
    }
});

function dragNotePad() {
    mult = 1.8;
    drag_note.draggable({
        snap        : true,
        cursor      : "move",
        delay       : 100,
        scroll      : false,
        cancel: "text",
        containment : "#main-container",
    })
}

dragNotePad();