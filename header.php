<meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="icon" type="image/png" href="./images/favicon.png">

    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>

    <link href="https://fonts.googleapis.com/css2?family=Cabin">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/c8d3d26770.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <script>
        // jQuery toggle function
        $(document).ready(function(){
            $("#nav_btn").click(function(){
                $("#sliding_nav").slideToggle();
            });
        });

        // jQuery Dark Mode toggle function
        $(document).ready(function(){
            $("#dm_btn").change(function(){
                $("body").toggleClass("dark_mode");
            });
        });

    </script>
    <header>
        <!-- container for dropdown and button -->
        <nav id="nav_head">
            <!-- hamburger image turned into button for dropdown -->
            <img src="./images/hamburger.png" alt="Nav Button" id="nav_btn">
            <!-- container for hidden dropdown list -->
            <div id="sliding_nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="book.php">Book Trip</a></li>
                    <li><a href="admin_login.php">Admin Login</a></li>
                </ul>
            </div>
        </nav>
        <h1>Halifax Canoe and Kayak</h1>
        <!-- dark mode button -->
        <div id="dm_btn">
            <input type="checkbox" class="checkbox" id="checkbox">
          <label for="checkbox" class="label">
            <i class="fas fa-moon"></i>
            <i class='fas fa-sun'></i>
            <div class='ball'></div>
          </label>
        </div>
        <img src="./images/paddle-white.png" alt="Logo" class="logo">
    </header>