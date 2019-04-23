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
        requestDB.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        requestDB.send('check='+ id);
        //window.location.reload();
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