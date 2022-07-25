<!DOCTYPE html>
<html>
    <head>
        <html>
    <head>
        <link rel = "stylesheet" href = "mystyle.css">
    </head>
</html>
    </head>
    <body>
        <table  width ="80%" >
            <form method = "POST" action="confirmed_page.php" onsubmit = "return validate_contactDetail()">
                <h1>Contact Details</h1>
                <tr>
                    <td>Full Name<span style="color:red">*</span>: </td>
                    <td><input type="text" id="name" name="name"/></td>
                </tr>
                <tr>
                    <td>Email<span style="color:red">*</span>: </td>
                    <td><input type="text" id="email" name="email"/></td>
                </tr>
                <tr>
                    <td>Phone number<span style="color:red">*</span> </td>
                    <td><input type="text" id="phonenumber" name="phonenumber"/></td>
                </tr>
                <tr>
                    <td>Address<span style="color:red">*</span>: </td>
                    <td><input type="text" id="address" name="address"/></td>
                </tr>
                <tr>
                    <td>Suburb<span style="color:red">*</span>: </td>
                    <td><input type="text" id="suburb" name="suburb"/></td>
                </tr>
                <tr>
                    <td>Postal Code<span style="color:red">*</span>: </td>
                    <td><input type="text" id="postal_code" name="postal_code"/></td>
                </tr>
                <tr>
                    <td>State<span style="color:red">*</span>: </td>
                    <td><input type="text" id="state" name="state"/></td>
                </tr>
                <tr>
                    <td>Country<span style="color:red">*</span>: </td>
                    <td><input type="text" id="country" name="country"/></td>
                </tr>
                <tr>
                    <td><input type="submit" id="purchase" name="Purchase"/></td>
                    
                </tr>
                
                
            </form>
            </table>
        
        
            
        </form>
    </body>
</html>

<script>
    function validate_contactDetail(){
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phonenumber = document.getElementById("phonenumber").value;
        var address = document.getElementById("address").value;
        var suburb = document.getElementById("suburb").value;
        var postal_code = document.getElementById("postal_code").value;
        var state = document.getElementById("state").value;
        var country = document.getElementById("country").value;
        let email_regExp = RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
        
        if(name==null || name == ""){
        alert("Please enter your name!");
        return false;
        }
        if(email_regExp.exec(email)==null || email_regExp.exec(email) == ""){
        alert("Please check your email!");
        return false;
        }
        if(phonenumber==null || name == ""){
        alert("Please enter your phone number!");
        return false;
        }
        if(address==null || name == ""){
        alert("Please enter your address!");
        return false;
        }
        if(suburb==null || name == ""){
        alert("Please enter your suburb name!");
        return false;
        }
        if(postal_code==null || name == ""){
        alert("Please enter your postal code!");
        return false;
        }
        if(state==null || name == ""){
        alert("Please enter your state!");
        return false;
        }
        if(country==null || name == ""){
        alert("Please enter your country!");
        return false;
        }
    }
    
</script>