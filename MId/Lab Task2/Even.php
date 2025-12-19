<!DOCTYPE html>
<html>
<head>
    <title>Participant Registration</title>
</head>
<style>
    body {
        background-color: #f4f4f4;
         padding: 20px;
    }
    
    
    input[type=text], input[type=number], input[type=password] {
        width: 300px;
        padding: 10px;
        margin: 5px 0 15px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #352d90ff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    fieldset {
        margin: auto;
        width: 50%;
        border: 2px solid #352d90ff;
        border-radius: 5px;
        padding: 20px;
        
    }
    
</style>

<script>



</script>


<fieldset>
<body>
    <center>
    <h1>Participant Registration</h1>
    </center>
    
    <form id="registrationForm">

   Full Name :<br>
   <input type="text"id="fullname" >
    <br>
    Email :<br>
    <input type="text"id="email" >
    <br>
    Phone Number :<br>
    <input type="number"id="phonenumber" > 
    <br>
    Password:<br>
    <input type="password"id="password" >
    <br>
    Confirm Password:<br>
    <input type="password"id="confirmpassword" >
    <br><br>
    <button type="submit">Register</button>

    <div id="registrationForm"></div>
    </form>
    </fieldset>
    <br>
    <fieldset>

    <form id="activityForm">
       <h1>Activity Selection</h1>
    Activity Name:
    <input type="text"id="activityname" >
    <br>
    <button id=addactivity type="submit">Add Activity</button>
    <div id="activityForm"></div>
    </form>
    </fieldset>
    
</body>

</html>



    