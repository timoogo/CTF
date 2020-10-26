$(function() {
  
    // Set the command-line prompt to include the user's IP Address
    //$('.prompt').html('[' + codehelper_ip["IP"] + '@HTML5] # ');
      $('.prompt').html('C:\\CTF\\view>');
  
    // Initialize a new terminal object
    var term = new Terminal('#input-line .cmdline', '#term_container output');
    term.init();
    
    
  });