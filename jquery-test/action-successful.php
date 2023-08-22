<html>
    <head>
    <title>Administrative Portal | OOU - ScreenClass</title>
    <?php include 'reference.php' ?>
    <style>
        h5{
            display:inline;
            font-size:1rem;
            padding-left:15px;
        }
    </style>
    </head>
    <body>

        
        <div class="dashboard-main-div">
           

               
                <div class="reg-success-main animated animated zoomIn animated" style="text-align:left;" id="actionsuccess" name="actionsuccess">
                <?php
                    if(isset($_POST['submit-form'])){
                    echo "<h3> Confirm Your Details Before Submitting </h3><br>";
                    echo "<h5>Firstname: </h5>" . $_POST['firstname'] . "<br>"; 
                    echo "<h5>Middlename: </h5>" .  $_POST['middlename'] . "<br>";
                    echo "<h5>Lastname: </h5>" .   $_POST['lastname'] . "<br>";
                    echo "<h5>Age: </h5>" .   $_POST['age'] . "<br>";
                    echo "<h5>Gender: </h5>" .   $_POST['gender'] . "<br>";
                    echo "<h5>Email: </h5>" .   $_POST['email'] . "<br>";
                    echo "<h5>Country: </h5>" .   $_POST['country'] . "<br>";
                    echo "<h5>City: </h5>" .   $_POST['city'] . "<br>";
                    echo "<h5>Lga: </h5>" .   $_POST['lga'] . "<br>";
                    echo "<h5>Residential address: </h5>" .   $_POST['residentialaddress'] . "<br>";
                    echo "<h5>Department: </h5>" .   $_POST['department'] . "<br>";
                    echo "<h5>Role: </h5>" .   $_POST['role'] . "<br>";
                    }

?>

                <button style="margin-top: 10px;" onclick="_detect_history();">
                    Ok
                </button>
                </div> 
        </div>
        <script>
            var actionsuccess = document.getElementById('actionsuccess');
            window.addEventListener("popstate", _detect_history);

            function _detect_history(){
                window.history.back({id:1}), null, null;
            }
        </script>
    </body>
</html>