
<?php
//Process the value from form and save it in the DB
//Check whether the submit button is clicked or not
if(isset($_POST['submit'])){
       //echo "button clicked";
       //1-Get the data from form 
       $name =$_POST['name'];
       $email =$_POST['email'];
       $phone =$_POST['phone'];
       $date =$_POST['date'];
       $service =$_POST['service'];
       $doctor =$_POST['doctor'];
   
       //2-Sql query to save the data into DB
       $sql = "INSERT INTO listappointement SET
       name='$name',
       email='$email',
       phone='$phone',
       date='$date',
       service='$service',
       doctor='$doctor'
       ";
   
       //3-Execute query and save data in DB or look constant
        $conn = mysqli_connect('localhost','root','') or die(mysqli_error()); //connect DB
        $db_select = mysqli_select_db($conn, 'safadental') or die(mysqli_error()); //selecet DB
        $res = mysqli_query($conn,$sql) or die(mysqli_error());
   
        //4-data inserted or not 
        if($res==true){
            echo"succssful insert";
        }else{
            echo"failed insert";
        }
} 
?>
<br>
<a class="btn_app" href="../SAFADENTAL/">Return</a>