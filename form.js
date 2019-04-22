function actions(option, idElement)
{
    var list = document.getElementsByTagName("li");
    var requestDB = new XMLHttpRequest();
    var data =

    if (option === 'delete') {
        requestDB.open("POST", 'forms.php', true);
        requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        requestDB.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        requestDB.send();
    }
    else if (option === 'check') {
        requestDB.open("POST", 'forms.php', true);
        requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        requestDB.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        requestDB.send();
    }
}

// OK idea: take the form documnent submit js and connect it with the php form for deleting