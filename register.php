<?php
include_once('lib/header.php');
?>

    <h1>REGISTER HERE</h1>

    <!-- <p><strong>WELCOME</strong></p> -->
    
    <p>All fields are required</p>
<hr/>

<form action="authentication.php" method="POST">

<p>
<label> First Name</label> </br>
<input type="text" name="firstname" placeholder="Enter your Firstname" required/>
</p> 

<p>
<label> Last Name</label> </br>
<input type="text" name="lastname" placeholder="Enter your Lastname" required/>
</p> 

<p>
<label> Email</label> </br>
<input type="text" name="email" placeholder="Enter your Email" required/>
</p> 

<p>
<label>Password</label> </br>
<input type="password" name="password" placeholder="Enter your Password" required/>
</p> 

<p>
<label>Confirm Password</label> </br>
<input type="password" name="confirmpassword" placeholder="Confirm your Password" required/>
</p> 

<p> 
    <label>Gender</label><br/>
    <select name="gender" required>
        <option value="">Select</option>
        <option>Male</option>
        <option>Female</option>
    </select>
</p>
<hr/>


<p >  <!--<input type="button" name="Submit" > --> 
<button type="submit">Register</button>
</p>

</form>


<?php
include_once('lib/footer.php');
?>