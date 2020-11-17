// const { contains } = require("jquery");

var currentLine = document.getElementById('currentCmd');
var terminal = document.getElementById('term-container');
var historyPosition = 0
let terminal_j = $("#term-container");

LineAddEventListener();

let historyArray = [""];


window.onload = function () {
    currentLine.value = "";
}



//Focus the current line whenever clicking in the terminal
terminal.addEventListener("click", fonction);
//terminal.addEventListener("click", DragTerminal);

function fonction() {
    currentLine.focus();
};

function LineAddEventListener() {
    //Event listener when pressing the enter key while writing in the terminal
    currentLine.addEventListener('keydown', (e) => {
        if (e.key === "Enter") {
            //console.log(e);
            TerminalHistoryOnEnter();
            TerminalOnEnter();

            currentLine = document.getElementById('currentCmd');
            currentLine.focus();
            LineAddEventListener();
        }
        if (e.key === "ArrowUp" && historyPosition < (historyArray.length - 1)) {
            historyPosition++;
            currentLine.value = historyArray[historyPosition];
        }
        if (e.key === "ArrowDown" && historyPosition > 0) {
            historyPosition--;
            currentLine.value = historyArray[historyPosition];
        }
    })
}

function TerminalOnEnter() {
    //Remove the IDs indicating the current line in the terminal
    $('#currentLine').removeAttr('id');
    $('#currentCmd').attr('disabled', true); //Prevent entry in previous lines
    $('#currentCmd').removeAttr('id');
    CheckUserInput();
    CreateNewLine();
    historyPosition = 0;
}

function TerminalHistoryOnEnter() {
    historyArray.shift();
    historyArray.unshift(currentLine.value);
    historyArray.unshift("");
    console.log(historyArray);
}




function CreateNewLine() {
    let newLine = $('<div class="line answers" id="currentLine"></div>');
    $('#term-container').append(newLine);

    let termText = $('<p class="term_text answers">C:\\CTF\\DOS></p>');
    let command = $('<input name="command" type="text" class="term" id="currentCmd">');
    $('#currentLine').append(termText, command);
}

function CheckUserInput() {
    // console.log(currentLine.value);
    // Create the div where the answer will be returned
    let termAnswer = $('<div class="line answers"></div>');
    $('#term-container').append(termAnswer);
    let textAnswer = $('<p class="term_text answers">unknown command</p>');
    // Check the user input and execute the corresponding command
    switch (currentLine.value) {
        case "help":
            textAnswer = $('<p class="term_text answers">available functions : <br>help <br>return <br>link <br>reload <br>clear</p>');
            break;
        case "clear":
            textAnswer = ""
            $(".answers").remove();
            break;
        case "return":
            textAnswer = $('<p class="term_text answers">This is the return function</p>');
            break;
        case "link":
            textAnswer = $('<a class="underline" href="https://youtu.be/dQw4w9WgXcQ" target="_blank"><p class="term_text answers">this is a super link</p></a>');
            break;
        case "reload":
            textAnswer = $('<p class="term_text answers">reloading the page...</p>');
            setTimeout(function () {
                document.location.reload();
            }, 2000);
            break;
    }
    termAnswer.append(textAnswer);
}

function DragTerminal(){
    mult = 1.8;
    terminal_j.draggable({
        containment: "#main-container",
        cursor:"grab",
        // drag: function (event, ui) {
        //     ui.position.top += (ui.offset.top - ui.originalPosition.top) * mult;
        //     ui.position.left += (ui.offset.left - ui.originalPosition.left) * mult;
        // }
    }); 
   
}
$("#term-container").resizable();

DragTerminal();
