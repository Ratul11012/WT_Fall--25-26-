<!DOCTYPE html>
<html>
<head>
    <title>
        Aiub course Registration
</title>
</head>
<body>
    <style>
        h1{
            color:red
        } 
        h3{
            color:blue
        }
        fieldset {
            background-color:#FFFFFF;
            padding: 29px;
            border-radius: 5px;
            width: 50%;
            margin: auto;
        }
        
        
       body{
       
background-color: lightyellow;
       }


</style>


    <center>
    <h1><u>Student Registration Information</u></h1>
<br>
</center>




<fieldset>
            First Name:<br>
            <input type="text" name="first_name"><br>

        Last Name:<br>
        <input type="text" name="last_name"><br>
        
            Student Id:<br>
            <input type="text" name="last_name"><br>

      Program/Major:<br>
            <input type="text" name="program_major"><br>
      
    
            Depertment:<br>
            <select>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
                <option value="ENG">ENG</option>
            </select><br>


            Phone:<br>
            <input type="text" name="phone"><br>

           University Email:<br>
            <input type="text" name="email"><br>

            Create a Password:<br>
            <input type="password" name="password"><br>
            Confirm Password:<br>
            <input type="password" name="confirm_password"><br>

            <h3>Semester Selection</h3>
           <input type="Radio"name=semester> Summer 2024
           <input type="Radio"name=semester> Fall 2024
              <input type="radio"name=semester> Spring 2025<br><br>

          Requested Credit Load(Max 15)
          <input type="number" name="credit_load"><br><br>

           <input type="checkbox"> I require acedemic advising before registration.<br>

           <h3><u>Course Selection</u></h3>
              <input type="checkbox"> MATH 1201 (Calsulus)
                <input type="checkbox"> CS 2105 (Data Structures)
                <input type="checkbox"> ECON 1001 (Microeconomics)<br>
                <input type="checkbox"> PHY 1102(Physics Lab)<br><br>

             <h3>Comment/Special Requested</h3>
                <textarea rows="4" cols="50" name="comment">
                </textarea><br><br>  
                
                

<center><input type="submit"></center>
 
        
        
</fieldset>
</body>
</html>