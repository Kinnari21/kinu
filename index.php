<!DOCTYPE html>
<html>
<head>
<title>Chuck Severance's Resume Registry</title>
<!-- bootstrap.php - this is HTML -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
    crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
    integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" 
    crossorigin="anonymous">

</head>
<body>
<div class="container">
<h1>Chuck Severance's Resume Registry</h1>
<p><a href="logout.php">logout</a></p>
<table border="1">
<tr><th>Name</th><th>Headline</th><th>Action</th></tr>
<tr><td>
<a href="view.php?profile_id=771">kinnari kotadiya</a></td>
<td>sege</td><td>
<a href="edit.php?profile_id=771">Edit</a> <a href="delete.php?profile_id=771">Delete</a></td></tr>

<tr><td>
<a href="view.php?profile_id=773">anj dneoo</a></td>
<td>zezre</td><td>
<a href="edit.php?profile_id=773">Edit</a> <a href="delete.php?profile_id=771">Delete</a></td></tr>
<tr><td>
<a href="view.php?profile_id=776">ncn cnrovo</a></td>
<td>opkpkp</td><td>
<a href="edit.php?profile_id=776">Edit</a> <a href="delete.php?profile_id=771">Delete</a></td></tr>
</table>
<p><a href="add.php">Add New Entry</a></p>



<p>
<b>Note:</b> Your implementation should retain data across multiple
logout/login sessions.  This sample implementation clears all its
data periodically - which you should not do in your implementation.
</p>
</div>
</body>
