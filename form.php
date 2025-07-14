<?php
require_once 'connections.php';
require_once 'insert.php';
?>   

<form method="post" action="">
    <h1>Registration Form</h1>

<label>
    ID:
    <input type="text" name="id" required>
</label>
<br>
<label>
    NAME:
    <input type="text" name="name" required>
</label>
<br>
<label>
    EMAIL:
    <input type="email" name="email" required>
</label>
<br>
<label>
    <input type="submit" value="Submit" name="submit">
</label>
</form>
