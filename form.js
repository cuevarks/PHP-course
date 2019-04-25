function actions(option, idElement)
{
    const requestDB = new XMLHttpRequest();
    const id = encodeURIComponent(idElement);
    const li = document.getElementById(idElement);

    if (option === 'delete') {
        requestDB.open("POST", 'forms.php', true);
        requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        li.style.display = 'none';
        requestDB.send('delete='+ id);
    }

    else if (option === 'check') {
        requestDB.open("POST", 'forms.php', true);
        requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        document.getElementById(id).className = 'checked';
        requestDB.send('check='+ id);
    }

    else {
        requestDB.open("POST", 'forms.php', true);
        requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        document.getElementById(id).classList.toggle('checked');
        requestDB.send('uncheck='+ id);
    }
}

function addItem() {
    let requestDB = new XMLHttpRequest();
    requestDB.open("POST", 'forms.php', true);
    requestDB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let taskDescription = document.getElementById('myInput').value;
    requestDB.send('myInput='+ taskDescription);
    window.location.reload();

}