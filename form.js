function actions(option)
{
    var list = document.getElementsByTagName("li");

    if (option === 'delete') {
        console.log('nani2');

        document.delete.submit();
    }
    else if (option === 'check') {
        console.log('nani');
        document.check.submit();
    }
}

// OK idea: take the form documnent submit js and connect it with the php form for deleting