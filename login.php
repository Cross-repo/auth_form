<?php
include_once('lib/header.php');
?>

    <h1>LOGIN HERE</h1>

    <p>All fields are required</p>
<hr/>

<form action="authentication.php" method="POST">

<p>
<label>Email</label> </br>
<input type="text" name="email" placeholder="Enter your Email" required/>
</p> 

<p>
<label>Password</label> </br>
<input type="password" name="password" placeholder="Enter your Password" required/>
</p> 

</form>



<p >  
<button type="submit">Login</button>
</p>






<?php
include_once('lib/footer.php');
?>

