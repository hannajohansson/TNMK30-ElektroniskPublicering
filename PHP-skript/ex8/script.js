/* TNMK30 / FO5 / EX8 / script.js */

function validate()
{
    var form = document.getElementById("form");
    var msg  = form.msg.value;

    if (msg == "")
    {
        window.alert("Enter message!");
        return false;
    }

    return true;
}
