var currentLine = document.getElementById('currentCmd');
var terminal = document.getElementById('term-container');
var historyPosition = 0



LineAddEventListener();

let historyArray = [""]



//Focus the current line whenever clicking in the terminal
terminal.addEventListener("click", fonction);
function fonction() {
    currentLine.focus();
};

function LineAddEventListener() {
    //Event listener when pressing the enter key while writing in the terminal
    currentLine.addEventListener('keydown', (e) => {
        if (e.key === "Enter") {
            //console.log(e);
            TerminalHistoryOnEnter()
            TerminalOnEnter();
            currentLine = document.getElementById('currentCmd');
            currentLine.focus();

            LineAddEventListener();
        }
        if (e.key === "ArrowUp" && historyPosition < (historyArray.length - 1)) {
            historyPosition++
            currentLine.value = historyArray[historyPosition];
        }
        if (e.key === "ArrowDown" && historyPosition > 0) {
            historyPosition--
            currentLine.value = historyArray[historyPosition];
        }
    })
}

function TerminalOnEnter() {
    //Remove the IDs indicating the current line in the terminal
    $('#currentLine').removeAttr('id');
    $('#currentCmd').attr('disabled', true); //Prevent entry in previous lines
    $('#currentCmd').removeAttr('id');
    CreateNewLine();
}

function TerminalHistoryOnEnter(){
    historyArray.shift()
    historyArray.unshift(currentLine.value);
    historyArray.unshift("")
    console.log(historyArray)
}




function CreateNewLine() {
    var newLine = $('<div class="line" id="currentLine"></div>');
    $('#term-container').append(newLine);

    var termText = $('<p class="term_text">C:\\CTF\\DOS></p>');
    var command  = $('<input name="command" type="text" class="term" id="currentCmd">');
    $('#currentLine').append(termText, command);
}



