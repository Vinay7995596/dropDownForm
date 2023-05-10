

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sytle.css" />
    <script type="module" src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Carlito:wght@700&family=Fira+Sans+Condensed&family=Fira+Sans:wght@500&family=Inconsolata:wght@500&family=Karla:wght@600&family=Noto+Sans+KR:wght@500&family=Oswald&family=Work+Sans:wght@400;500&display=swap"
        rel="stylesheet">
</head>

<body>
    <div action="index.php" method="POST" id="form">
        <div class="task-main-container">
            <div>
                <button class="dropdown-option" id="serviceOption">
                    <div class="alignmeny-arrow-content">
                        <div >
                            Service Options
                        </div>
                        <div>
                            <svg id="dropdown1" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                            </svg>
                            <svg id="arrowup1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                </button>
                <button class="dropdown-option" id="sellerDetails">
                    <div class="alignmeny-arrow-content">
                        <div>
                            Seller details
                        </div>
                        <div>
                        <svg id="arrowup2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <svg id="dropdown2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                            </svg>
                        </div>
                    </div>
                </button>
                <button class="dropdown-option" id="budget">
                    <div class="alignmeny-arrow-content">
                        <div>
                            Budget
                        </div>
                        <div>
                        <svg id="arrowup3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <svg id="dropdown3" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                            </svg>
                        </div>
                    </div>
                </button>
                <button class="dropdown-option" id="delevryTime">
                    <div class="alignmeny-arrow-content">
                        <div>
                            Delivery Time
                        </div>
                        <div>
                            <svg id="dropdown4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                            </svg>
                            <svg id="arrowup4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                </button>
            </div>
    
            <div class="total-main-check-labels-container">
                <div class="check-box-lebel-container">
                    <div>
                        <input type="checkbox" id="switch1" class="checkbox" />
                        <label for="switch1" class="toggle">
                        </label>
                    </div>
                    <span class="lebel-elements1">Pro Services</span>
                </div>
                <div class="check-box-lebel-container">
                    <div>
                        <input type="checkbox" id="switch2" class="checkbox" />
                        <label for="switch2" class="toggle">
                        </label>
                    </div>
                    <span class="lebel-elements1">Local Seller</span>
                </div>
                <div class="check-box-lebel-container">
                    <div>
                        <input type="checkbox" id="switch3" class="checkbox" />
                        <label for="switch3" class="toggle">
                        </label>
                    </div>
                    <span class="lebel-elements1">Online Seller</span>
                </div>
            </div>
        </div>
    
        <div class="main-container1" id="container1">
            <div class="card-container">
                <h4 class="headings mb-3">Search engine</h4>
                <div class="row ml-3 mb-2">
                <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db='formcontainer1';
            // Create connection
            $conn = mysqli_connect($servername, $username, $password,$db);
            
            // Check connection
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            // echo "Connected successfully";
            $query = "SELECT * FROM `serviceoptions` WHERE `group` LIKE 'search engine' AND isActive = true ";
            $sql=mysqli_query($conn,$query);
            $Name='';
            if(mysqli_num_rows($sql)>0) {
                
                while($row=mysqli_fetch_assoc($sql)) {
                    echo '<div class="col-lg-6 mb-3">';
                    $isChecked = '';
                    if ($row['isActive']) {
                        echo '<input type="checkbox" class="checkbox-content" name="' . $row["name"] . '" id="' . $row["name"] . '" checked>';
                        echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 else {
                    echo '<input class="checkbox-content" type="checkbox" name="' . $row["name"] . '" id="' . $row["name"] . '" >';
                    echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 echo '</div>';     

                    
            ?>
            <?php 
        }
        }
        ?>
                </div>

<h4 class="headings mb-3">Industry</h4>
                <div class="row ml-3 mb-3">
                <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db='formcontainer1';
            // Create connection
            $conn = mysqli_connect($servername, $username, $password,$db);
            
            // Check connection
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            // echo "Connected successfully";
            $query = "SELECT * FROM `serviceoptions` WHERE `group` LIKE 'industry'  ORDER BY `order`";
            $sql=mysqli_query($conn,$query);

            $Name='';
            if(mysqli_num_rows($sql)>0) {
                
                while($row=mysqli_fetch_assoc($sql)) {
                    echo '<div class="col-lg-6 mb-3">';
                    $isChecked = '';
                    if ($row['isActive']) {
                        echo '<input type="checkbox" class="checkbox-content" name="' . $row["name"] . '" id="' . $row["name"] . '" checked>';
                        echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 else {
                    echo '<input type="checkbox" class="checkbox-content" name="' . $row["name"] . '" id="' . $row["name"] . '" >';
                    echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 echo '</div>';    

                    
            ?>
            <?php 
        }
        }
        ?>
                </div>


                <!-- <div>
                    <h4 class="hedings"></h4>
                    <ul class="row">
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google" >
                                <label class="lebel-elements" id="google"><span name="count" value="11980"
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="bing">
                                <label class="lebel-elements" id="bing"><span
                                        class="numbers-container" name="count" value="17561"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="youtube">
                                <label class="lebel-elements" id="youtube"><span
                                        class="numbers-container" name="count" value="561"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="apple">
                                <label class="lebel-elements" id="apple"><span
                                        class="numbers-container" name="count" value="193"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google">Other <span
                                        class="numbers-container" name="count" value="78">(78)</span></label>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr class="ml-3 mr-3">
                <div>
                    <h4 class="hedings"></h4>
                    <ul class="row">
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="marketing">
                                <label class="lebel-elements" id="marketing"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="fashion">
                                <label class="lebel-elements" id="fashion"></label>
                                <span class="numbers-container"></span>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="Beauty">
                                <label class="lebel-elements" id="Beauty"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="real">
                                <label class="lebel-elements" id="real"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="services">
                                <label class="lebel-elements" id="services"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                    </ul>
                </div> -->
                <hr class="ml-3 mr-3">
                <div class="clear-apply-button-container">
                    <button class="clear-button">Clear All</button>
                    <button class="apply-butoon" name="applyOption">Apply</button>
                </div>
            </div>
        </div>
    
        <!-- seller details card Container -->
    
        <div class="container2 second-container-margin" id="container2">
            <div class="card-container">
                <div>
                    <h4 class="hedingsnb-3">Seller Levlel</h4>

                    <div class="row ml-3 mb-2">
                    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db='formcontainer1';
            // Create connection
            $conn = mysqli_connect($servername, $username, $password,$db);
            
            // Check connection
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            // echo "Connected successfully";
            $query = "SELECT * FROM `sellerdetails` WHERE `group` LIKE 'seller Level' ORDER BY `order`";
            $sql=mysqli_query($conn,$query);

            $Name='';
            if(mysqli_num_rows($sql)>0) {
                
                while($row=mysqli_fetch_assoc($sql)) {
                    echo '<div class="col-lg-6 mb-3">';
                    $isChecked = '';
                    if ($row['isActive']) {
                        echo '<input class="checkbox-content" type="checkbox" name="' . $row["name"] . '" id="' . $row["name"] . '" checked>';
                        echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 else {
                    echo '<input class="checkbox-content" type="checkbox" name="' . $row["name"] . '" id="' . $row["name"] . '" >';
                    echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 echo '</div>';    

                    
            ?>
            <?php 
        }
        }
        ?>
                    </div>
                    
                    <!-- <ul class="row">
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                    </ul> -->
                </div>
                <hr class="ml-3 mr-3">
                <div>
                    <h4 class="hedings mb-3">Seller Speaks</h4>

                    <div class="row ml-3 mb-3">
                    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db='formcontainer1';
            // Create connection
            $conn = mysqli_connect($servername, $username, $password,$db);
            
            // Check connection
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            // echo "Connected successfully";
            $query = "SELECT * FROM `sellerdetails` WHERE `group` LIKE 'seller Speaks'  ORDER BY `order`";
            $sql=mysqli_query($conn,$query);

            $Name='';
            if(mysqli_num_rows($sql)>0) {
                
                while($row=mysqli_fetch_assoc($sql)) {
                    echo '<div class="col-lg-6">';
                    $isChecked = '';
                    if ($row['isActive']) {
                        echo '<input class="checkbox-content" type="checkbox" name="' . $row["name"] . '" id="' . $row["name"] . '" checked>';
                        echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 else {
                    echo '<input class="checkbox-content" type="checkbox" name="' . $row["name"] . '" id="' . $row["name"] . '" >';
                    echo '<label class="lebel-elements" for="' . $row["name"] . '">' . $row["name"] . '</label>';
                 }
                 echo '</div>'; 
                       

                    
            ?>
            <?php 
        }
        }
        ?>
                    </div>
                    
                    <!-- <ul class="row">
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"> <span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"> <span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                        <li class="col-lg-6">       
                            <div>
                                <input class="checkbox-content" type="checkbox" id="google">
                                <label class="lebel-elements" id="google"><span
                                        class="numbers-container"></span></label>
                            </div>
                        </li>
                    </ul> -->
                </div>
                <div class="clear-apply-button-container">
                    <button class="clear-button">Clear All</button>
                    <button class="apply-butoon">Apply</button>
                </div>
            </div>
        </div>
    
        <!-- budget-container -->
        <div class="container3 third-container" id="container3">
            <div class="card-container last-container2">
                <div class="d-flex flex-row">
                    <div class="d-flex flex-column m-3">
                        <label for="minimumAmount">Min</label>
                        <div class="button-with-input-rupee">
                            <input id="minimumAmount" class="input-container" type="number" placeholder="Any">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-currency-rupee rupee-icon" viewBox="0 0 16 16">
                                <path
                                    d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex flex-column m-3">
                        <label for="maximumAmount">Max</label>
                        <div class="button-with-input-rupee">
                            <input id="minimumAmount" class="input-container" type="number" placeholder="Any">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-currency-rupee rupee-icon" viewBox="0 0 16 16">
                                <path
                                    d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="clear-apply-button-container">
                    <button class="clear-button">Clear All</button>
                    <button class="apply-butoon">Apply</button>
                </div>
            </div>
    
        </div>
        <!-- Delevery Container -->
        <div class="container4 fourth-container" id="container4">
            <div class="card-container last-container">
                <div>
                    <input class="checkbox-content" type="radio" id="hours24" name="delevery" value="24Hours">
                    <label class="lebel-elements" for="hours24">Express 24H</label>
                </div>
                <div>
                    <input class="checkbox-content" type="radio" id="day3" name="delevery" value="3days">
                    <label class="lebel-elements" for="day3">Up to 3days</label>
                </div>
                <div>
                    <input class="checkbox-content" type="radio" id="day7" name="delevery" value="7days">
                    <label class="lebel-elements" for="day7">Up to 7days</label>
                </div>
                <div>
                    <input class="checkbox-content" type="radio" id="anyTime" name="delevery" value="AnyTime">
                    <label class="lebel-elements" for="anyTime">Any Time</label>
                </div>
                <div class="clear-apply-button-container last-button-container">
                    <button class="clear-button">Clear All</button>
                    <button class="apply-butoon">Apply</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>