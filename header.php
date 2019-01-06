<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light headbg">
        <div class="container">
            <a class="navbar-brand" href="index.php">GRM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="loginUser.php">Check Reward</a>
                    </li>
                    <?php  
                        if(isset($_SESSION['name'])){
                            if($_SESSION['name']=='admin') { 
                                echo '
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">User List</a>
                                </li>
                                ';
                            }
                            else{
                                echo 'fail';
                            }
                        }
                        
                        
                    ?>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php  if(isset($_SESSION['id'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User : <?php echo $_SESSION['name']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">logout</a>
                            </div>
                        </li>
                    <?php }else { ?>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">for Admin</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
<!-- end-navbar -->