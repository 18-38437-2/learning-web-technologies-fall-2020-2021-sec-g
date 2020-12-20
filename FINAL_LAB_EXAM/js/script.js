function formvalidation()
{
    let name = checkEmployeeName();
    let contactno = checkContact();
    let password = checkPassword();
    let username = checkUserName();
    

    if(name == true && contactno == true && password == true && username == true)
    {
        alert('All Vaild');
        return true;
    }
    else
    {
        alert('Try again');
        return false;
    }

}

function checkEmployeeName()
{
    let obj = document.getElementById('name').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}
function checkContact()
{
    let obj = document.getElementById('contactno').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}
function checkUserName()
{
    let obj = document.getElementById('username').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}