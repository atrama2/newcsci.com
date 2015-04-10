<h1>User</h1>

<div class="col-lg-5">

<form method="post" action="<?php echo URL;?>user/create">

	<div class="form-group">
		<label for="inputEmail">Email Address</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="อีเมล"/>
	</div>

    <label>Login</label><input type="text" name="login" /><br />
    <label>Password</label><input type="text" name="password" /><br />
    <label>Role</label>
        <select name="role">
            <option value="default">Default</option>
            <option value="admin">Admin</option>
        </select><br />
    <label>&nbsp;</label><input class="btn btn-default" type="submit" />
</form>

</div><!-- col-lg-5 -->

<hr />

<div class="col-lg-7">
<table>
<?php
    foreach($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['userid'] . '</td>';
        echo '<td>' . $value['login'] . '</td>';
        echo '<td>' . $value['role'] . '</td>';
        echo '<td>
                <a href="'.URL.'user/edit/'.$value['userid'].'">Edit</a> 
                <a href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>
</div><!-- col-lg-7 -->

