<?php include 'header.php'?>
<div class="container">
    <div class="rows">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <form action="signup_handler.php" method="post">
                <div class="form-group">
                    <label for="firstname">firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="firstname">
                </div>

                <div class="form-group">
                    <label for="lastname">lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>

                <div class="form-group">
                    <label><input type="date"> Date Registered</label>
                </div>

                <button type="submit"  name='signup' class="btn btn-default">Submit</button>
            </form>

        </div>
        <div class="col-md-4"></div>






    </div>

</div>
<?php include'footer.php'?>
