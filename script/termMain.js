var currentLine = document.getElementById('currentCmd');
var terminal = document.getElementById('term-container');
var historyPosition = 0



LineAddEventListener();

let historyArray = [""];


window.onload = function () {
    currentLine.value = "";
}



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
    var newLine = $('<div class="line" id="currentLine"></div>');
    $('#term-container').append(newLine);

    var termText = $('<p class="term_text">C:\\CTF\\DOS></p>');
    var command = $('<input name="command" type="text" class="term" id="currentCmd">');
    $('#currentLine').append(termText, command);
}

function CheckUserInput() {
    // console.log(currentLine.value);
    // Create the div where the answer will be returned
    var termAnswer = $('<div class="line"></div>');
    $('#term-container').append(termAnswer);
    var textAnswer = $('<p class="term_text">unknown command</p>');
    // Check the user input and execute the corresponding command
    switch (currentLine.value){
        case "help":
            textAnswer = $('<p class="term_text">available functions : help return link</p>');
            break;
        case "return":
            textAnswer = $('<p class="term_text">command return running...</p>');
            break;
        case "link":
            textAnswer = $('<a href="https://youtu.be/dQw4w9WgXcQ" target="_blank"><p class="term_text">this is a super link</p></a>');
            break;
    }
    termAnswer.append(textAnswer);
}