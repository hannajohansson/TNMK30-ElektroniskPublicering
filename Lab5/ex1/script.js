/* TNMK30 / FO6 / EX2 / script.js */

function validate()
{
    var form  = document.getElementById("form");
    var query = form.query.value;

    if (query == "")
    {
        window.alert("Enter SQL-guery!");
        return false;
    }

    return true;
}
