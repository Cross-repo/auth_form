<?php

// print_r($_POST);

 //Collecting data

 //if(isset($_POST['submit'])) {
     $firstname= $_POST['firstname'];
     $lastname= $_POST['lastname'];
     $email= $_POST['email'];
     $password= $_POST['password'];
     $confirmpassword= $_POST['confirmpassword'];
     $gender= $_POST['gender'];



      $errorArray = [];

//  //Verifying data + Validation

         if($firstname == "")  {
             $errorArray = "Please fill in your first name";
         }


         if($lastname == "")  {
             $errorArray = "Please fill in your last name";
         }
       

         if($email == "")  {
             $errorArray = "Please fill in your email";
         }
       
       
         if($password == "")  {
             $errorArray = "Please fill in your password";
         }
       

         if($confirmpassword == "")  {
             $errorArray = "Please confirm your password";
         }
       

         if($gender == "")  {
             $errorArray = "Please select your gender";
         }
       

         
                $check = sizeof ($errorArray);
                if ($check != 0) {  
                            print_r($errorArray);
                                            } 




     /*    $array_data =[
            'firstname'   > $firstname,
            'lastname'   > $lastname,
            'email'   > $email,
            'gender'   > $gender

    ];  */

       //  echo $firstname . $lastname . $email . $gender;

       //  file_put_contents('db/' . $array_data['firstname'] . ".txt" , $array_data);

            $file = fopen ('C:\\xampp\\htdocs\\Zuri\\BasicAuth\\db\\' . $email. ".txt" , "w");

           
        fwrite($file, $password . "\n");
        fwrite($file, $confirmpassword . "\n");    
        fwrite($file, $firstname . "\n");
        fwrite($file, $lastname . "\n");
        fwrite($file, $email . "\n");
        fwrite($file, $gender . "\n");
           
            echo "User registered successfully";

        /*      $array_data =[
                      'firstname'   > $firstname,
                      'lastname'   > $lastname,
                      'email'   > $email,
                      'gender'   > $gender

              ];


        echo $firstname . $lastname . $email . $gender;

          
        file_put_contents('db/' . $array_data['firstname'] . ".txt" , $array_data);

    */
       
       
       
 
?>