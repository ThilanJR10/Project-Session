<!DOCTYPE html PUBLIC >
<html >
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css"  />
</head>
<body>
</br> </br>
<center>
    <h1> FINAL YEAR PROJECT SESSION  </h1>
</center>
<div class="container">
    <div class="form-container">
        <form method="post" action="login_process.php">
            <style type="text/css">
                .fieldset{
                    display: inline-block;
                }
            </style>
            <div>
                <fieldset class="fieldset-auto-width">
                    <legend><b>LOGIN FORM</b></legend>  </br> </br>
                    <input type='hidden' name='submitted' id='submitted' value='1' />
                    <?php
                    if(isset($error))
                    {
                        ?>
                        <div class="Something went wrong">
                            <i class="Something went wrong please retry"></i> &nbsp; <?php echo $error; ?> !
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for='student'> <b>Student ID </b></label>
                        <input type='text' class="form-control" name='Student_ID' id='Student ID'  maxlength="30" />
                    </div> </br></br>
                    <div class="form-group">
                        <label for='password' ><b> Password </b> </label>
                        <input type='password' class="form-control" name='password' id='password' maxlength="30" />
                    </div>
                    <div class="clearfix"></div><hr />
                    <div class="form-group">
                        <button type="submit" name="Login" value= "Login">
                            <i class="glyphicon glyphicon-log-in"></i>&nbsp;LOG IN
                        </button>
                    </div>
                    <br />
                    
        </form>
    </div>
</div>

</body>
</html>