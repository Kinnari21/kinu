<!DOCTYPE html>
<html>
<head>
<title>Dr. Chuck's Profile Edit</title>


</head>
<body>
<div class="container">
<h1>Editing Profile for UMSI</h1>
<form method="post" action="edit.php">
<p>First Name:
<input type="text" name="first_name" size="60"
value="kinnari"
/></p>
<p>Last Name:
<input type="text" name="last_name" size="60"
value="kotadiya"
/></p>
Email:
<input type="text" name="email" size="30"
value="kinnari2171998@gmail.com" id="email"/>
<p>Headline:<br/>
<input type="text" name="headline" size="80"
value="booooo"
/></p>
<p>Summary:<br/>
<textarea name="summary" rows="8" cols="80">
H</textarea>
<p>
<input type="hidden" name="profile_id"
value="771"
/>
<input type="submit" onclick="return doValidate();" value="Save">
<input type="submit" name="cancel" value="Cancel">
</p>
</form>

<script>
function doValidate() {
    console.log('Validating...');
    try {
        ad = document.getElementById('email').value;
 
        console.log("Validating addr="+ad+");
        if (ad == null || ad == "") {
            alert("fields must be filled out");
            return false;
        }
        if ( ad.indexOf('@') == -1 ) {
            alert("Invalid email address");
            return false;
        }
        return true;
    } catch(e) {
        return false;
    }
    return false;
}
</script>


</div>
</body>
</html>

