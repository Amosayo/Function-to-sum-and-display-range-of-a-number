<?php
    include_once 'header.php';
    
?>



<body>
<nav class="navbar-expand-md navbar-light text-center mb-3" style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <span class="navbar-text">
      <h3>SideHustle Week 1 Task. </h3> 
      <figcaption class="blockquote-footer">
    Function to display Range of a Numbers and The Sum of the Numbers.
    </figcaption>
    </span>
    </div>
 </nav>
        <div class="container-fluid">
        <div class="container">
        <div class="row">
        <div class="col-md-3"> </div>
        <div class="card col-md-6 py-2">
            <form action="Includes/shownumber.inc.php" method="POST">
            <div class="form-group">
                <label for="FirstValue"> First Value: </label>
                    <input type="text" class="form-control" id="FirstValue" name="FirstValue">    
            </div> 

            <div class="form-group">
                <label for="SecondValue"> Second Value: </label>
                    <input type="text" class="form-control" id="SecondValue" name="SecondValue">    
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success" name="show"> Show The Range Value</button>
            </div>
            </form>

            <?php

                if(isset($_GET["error"])){
                    if($_GET["error"]=="EmptyInput"){

                        echo "<p> Please fill all the fields. </p>";

                    }
                }
            ?>
        </div>
        <div class="col-md-3"> </div>
        
        </div>
        
        </div>
        
        
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery, Popper and Bootstrap Bundle (includes Popper) -->
    <script src="Resources\Vendor\Js\Font_Aweson.js"></script>
    <script src="Resources\Vendor\Js\jquery.min.js"></script>
    <script src="Resources\Vendor\Js\popper.min.js"></script>
    <script src="Resources\Vendor\Js\bootstrap.min.js"></script>
</body>
</html>