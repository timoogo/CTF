// const { contains } = require("jquery");

var currentLine = $('#currentCmd');
var terminal = $('#term-container');
var historyPosition = 0
let terminal_j = $("#term-container");


let historyArray = [""];
LineAddEventListener();

window.onload = function () {
    currentLine.val("");
}



//Focus the current line whenever clicking in the terminal
terminal.on("click", () => {
    currentLine.focus();
})
//terminal.on("click", DragTerminal());

function LineAddEventListener() {
    //Event listener when pressing the enter key while writing in the terminal
    currentLine.on("keydown", (e) => {
        if (e.key === "Enter") {
            //console.log(e);
            TerminalHistoryOnEnter();
            TerminalOnEnter();

            currentLine = $('#currentCmd');
            currentLine.focus();
            LineAddEventListener();
            if (historyArray.length >= 21) {
                historyArray.splice(20, 1)
            }
        }
        if (e.key === "ArrowUp" && historyPosition < (historyArray.length - 1)) {
            e.preventDefault()
            historyPosition++;
            historyRender();
        }
        if (e.key === "ArrowDown" && historyPosition > 0) {
            e.preventDefault()
            historyPosition--;
            historyRender();
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
    historyArray.unshift(currentLine.val());
    historyArray.unshift("");
    console.log(historyArray);
}

function historyRender() {
    currentLine.val(historyArray[historyPosition])
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
    switch (currentLine.val()) {
        case "help":
            textAnswer = $('<p class="term_text answers">available functions : <br>help <br>return <br>link <br>reload <br>clear <br>cat <br>ls <br>hack</p>');
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
            setTimeout(() => {
                location.reload();
            }, 2000);
            break;
        case "cat mdp.txt" || "type mdp.txt":
            textAnswer = $('<p class="term_text answers">1234</p>');
            break;
        case "cat doNotOpenPlz.txt" || "type doNotOpenPlz.txt":
            textAnswer = $('<a class="underline" target="_blank" href="https://cdn.discordapp.com/attachments/555868542843748363/779661281501118504/sa_don_a_refelechir.jpg"><p class="term_text answers">DoNotClicPlz</p></a>');
            break;
        case "ls":
            textAnswer = $('<p class="term_text answers">mdp.txt<br>doNotOpenPlz.txt</p>');
            break;
        case "hack":
            textAnswer = $('<p class="term_text answers">You need to enter the right password</p>');
            break;
        case "hack 1234":
            textAnswer = $('<p class="term_text answers">Good job <span id="dots"></span></p>');
            termAnswer.append(textAnswer);
            dotsAnim($('#dots'),150);

            let level = $('main').attr('data-id');
            console.log(level);

            $.ajax({
                url: '../complete.php',
                method: "POST",
                data: {level}
            });

            setTimeout(() => {
                location.href = "level_1.php";
            }, 2000);
            break;
    }
    termAnswer.append(textAnswer);
}

function DragTerminal() {
    mult = 1.8;
    terminal_j.draggable({
        containment: "#main-container",
        cursor: "grabbing",
        // drag: function (event, ui) {
        //     ui.position.top += (ui.offset.top - ui.originalPosition.top) * mult;
        //     ui.position.left += (ui.offset.left - ui.originalPosition.left) * mult;
        // }
    });


}
$("#term-container").resizable();

DragTerminal();

function dotsAnim(parent,interval){
    setInterval(() => {
        if (dots < 3) {
            parent.append(".");
            dots++;
        } else {
            parent.html("");
            dots = 0;
        }
    }, interval);
}