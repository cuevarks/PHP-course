function deletion(option)
{
    var list = document.getElementsByTagName("li");
    if (option == 'delete') {
        console.log(list)
        document.delete.submit();
    }
}

// OK idea: take the form documnent submit js and connect it with the php form for deleting