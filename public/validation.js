  function validateForm()
  {
    var a=document.forms["reg"]["username"].value;
    var b=document.forms["reg"]["email"].value;
    var c=document.forms["reg"]["password"].value;
	var d=document.forms["reg"]["password-confirm"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("Username must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Email must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Password must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("Confirm password must be filled out");
      return false;
    }
	if(d!==c) {
		alert("Passwords are not the same!");
		return false;
	}
  }