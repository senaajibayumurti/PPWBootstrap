var nama = document.getElementById('name')
var email = document.getElementById('email')
var sendButton = document.getElementById('send-btn')

document.getElementById("editButton1").addEventListener("click", function() {
    var textService1 = document.getElementById("textService1");
    
    var editButton1 = document.getElementById("editButton1");
    
    var saveButton1 = document.getElementById("saveButton1");
    
    textService1.contentEditable = "true";
    textService1.focus();

    editButton1.style.display = "none";
    saveButton1.style.display = "inline-block";
    });

    document.getElementById("saveButton1").addEventListener("click", function() {
    var textService1 = document.getElementById("textService1");
    var editButton1 = document.getElementById("editButton1");
    var saveButton1 = document.getElementById("saveButton1");

    textService1.contentEditable = "false";

    editButton1.style.display = "inline-block";
    saveButton1.style.display = "none";
    });

