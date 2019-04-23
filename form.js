function actions(option, idElement)
{
    let requestDB = new XMLHttpRequest();
    var id = encodeURIComponent(idElement);
    var li = document.getElementById(idElement);
    console.log(li);

    if (option === 'delete') {
        requestDB.open("POST", 'forms.php', true);
        requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        requestDB.onreadystatechange = function() {
            if (requestDB.readyState == 4 && requestDB.status == 200) {
                li.style.display = 'none';
            }
        };
        requestDB.send('delete='+ id);
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