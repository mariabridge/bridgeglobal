function requireValidation(id)
{
    
if(id=='')
return false;
else
return true;
}

function validateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return true;
  }
    //alert("You have entered an invalid email address!")
    return false;
}
function pvalidate(p1, p2) {
if (p1 == p2)
{
//alert('Passwords did not match!');
return true;
}
else
{
return false;
}
}