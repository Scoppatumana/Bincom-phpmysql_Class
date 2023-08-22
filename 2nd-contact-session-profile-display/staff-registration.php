
<html>
    <head>
    <title>Member registration </title>
    <?php include 'reference.php' ?>
    </head>
    <body>
        <div class="dashboard-main-div">


            <div class="right-sided-div">
                <div class="bg-image-div staff-list-bg">
                    <div class="bg-cover">
                        <div class="dashboard-overall">

                            <div class="dashboard-admin-text staff-dashboard">
                                <span class="dashboard">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Member registration 
                                </span>
                                    <br/>
                                <span class="admin-portal">
                                 
                                </span>
                            </div>

                            <div class="current-time button-div">
                              
                            </div>

                            
                        </div>
                    </div>
                </div>

               
            <div class="staff-list-overall-div student-reg-overall-div">
                <form action="action-successful.php" method="POST">
                    <fieldset>
                        <legend>Personal Information</legend>
                        <div class="individual-input">
                            <label for="">First Name:</label><br/>
                            <input type="text" placeholder="First Name" name="firstname" id="firstname" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Middle Name:</label><br/>
                            <input type="text" placeholder="Middle Name" name="middlename" id="middlename" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Last Name:</label><br/>
                            <input type="text" placeholder="Last Name" name="lastname" id="lastname" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Age:</label><br/>
                            <input type="text" placeholder="Age" name="age" id="age" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Gender:</label><br/>
                            <select name="gender" id="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="individual-input">
                            <label for="">Email Address:</label><br/>
                            <input type="email" placeholder="Email Address" name="email" id="email" required>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Residential Information</legend>
                        <div class="individual-input">
                            <label for="">Country:</label><br/>
                            <input type="text" placeholder="Country" name="country" id="country" required>
                        </div>
                        <div class="individual-input">
                            <label for="">City:</label><br/>
                            <input type="text" placeholder="City" name="city" id="city" required>
                        </div>
                        <div class="individual-input">
                            <label for="">LGA:</label><br/>
                            <input type="text" placeholder="LGA" name="lga" id="lga" required>
                        </div>
                        <div class="individual-input residential-address">
                            <label for="">Residential Address:</label><br/>
                            <input type="text" class="residential-input" placeholder="Residential Address"  name="residentialaddress" id="residentialaddress" required>
                        </div>
                       
                       
                    </fieldset>


                    <fieldset>
                        <legend>Professional Information</legend>
                        <div class="individual-input" style="float:left;">
                            <label for="">Department:</label><br/>
                            <select name="department" id="department" required>
                            <option value=""selected>Department</option>
                            <option value="">Mathematics Department</option>
                            <option value="">English Department</option>
                            </select>
                        </div>
                        <div class="individual-input" style="float:left;">
                            <label for="">Role:</label><br/>
                            <select name="role" id="role" required>
                                <option value=""selected>Role</option>
                                <option value="Dean">Dean</option>
                                <option value="Lecturer">Lecturer</option>
                                
                            </select>
                        </div>        
                    </fieldset>
                        
                        <button class="submit-btn" name="submit-form" type="submit"><i class="fa fa-check"></i> SUBMIT</button>
                </form>     
            </div>   

                   
               
            </div>
        </div>



      
    </body>
</html>