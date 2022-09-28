<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveUser.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add User</h4></center>
<hr>
<div id="ac">
<span>Full Name : </span><input type="text" style="width:265px; height:30px;" name="name" placeholder="Full Name" Required/><br>
<span>Username : </span><input type="text" style="width:265px; height:30px;" name="username" placeholder="Address"/><br>
<span>Password : </span><input type="text" style="width:265px; height:30px;" name="password" placeholder="Contact"/><br>
<span>User Type/position: </span><select name="type">
    <option value="cashier">Cashier</option>
    <option value="admin">Administration</option>
</select><br>

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>