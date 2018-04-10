<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#menu").on("click","a", function (event) {
                event.preventDefault();
                var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
    </script>
    <title>Merkury</title>
</head>
<body>
<?php
$host="localhost";
$user="mysql";
$pass="mysql"; //установленный вами пароль
$db_name="bd";
$link=mysql_connect($host,$user,$pass);
mysql_select_db($db_name,$link);

//Если переменная Name передана
if (isset($_POST["fio"])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysql_query("INSERT INTO `message` (`fio`, `mail`, `message`) 
                        VALUES ('".$_POST['fio']."','".$_POST['mail']."','".$_POST['message']."')");
    /*//Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }*/
}
?>
<div class="home">
    <div class="container">
        <div class="row">
            <div class="mt-2 col-12 ">
                <nav  class="navbar navbar-expand-lg navbar-light " style="padding: 0px ; ">
                    <a class="navbar-brand" href="#">
                        <img src="css/logo.png" width="157" height="49" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav nav-pills ml-auto" id="pills-tab" role="tablist" >
                            <li class="nav-item">
                                <a href="#yak1" class="nav-link" >Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-turlar-tab" data-toggle="pill" href="#prising" role="tab" aria-controls="pills-turlar" aria-selected="false">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-gemi-tab" data-toggle="pill" href="#blog" role="tab" aria-controls="pills-gemi" aria-selected="false">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-hotteler-tab" data-toggle="pill" href="#contact" role="tab" aria-controls="pills-hotteler" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-outline-primary">login</button>
                    </div>
                </nav>
                <div id="banner">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 ">
                                <header>
                                    <h2>Grow Your business with Merkury</h2>
                                    <div class="purple">
                                        <span class="byline">Your partner in crime!</span>
                                    </div>
                                </header>
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="center">
                <!-- Кнопка пуска модальное окно -->
                <button type="button" class="btn btn-primary btn-lg center-block" data-toggle="modal" data-target="#myModal">
                    Get started
                </button>

                <!-- Модальное окно -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Get started</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <tr>
                                        <td>ФИО:</td>
                                        <td><input type="text" name="fio"></td>
                                    </tr>
                                    <tr>
                                        <td>Mail:</td>
                                        <td><input type="text" name="mail" size="3"></td>
                                    </tr>
                                    <tr>
                                        <td>Текст</td>
                                        <td><input type="text" name="message" size="3"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" value="OK"></td>
                                    </tr>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="iconFeatures" id="yak1">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div style=" font-size:5em; color:#5284ff">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h5>Manage Your Workflow</h5>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button type="button" class="btn btn-outline-secondary">See more</button>
            </div>
            <div class="col-4">
                <div style=" font-size:5em; color:#5284ff">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h5>Analytics & Insights</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button type="button" class="btn btn-outline-secondary">See more</button>
            </div>
            <div class="col-4">
                <div style=" font-size:5em; color:#5284ff">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <h5>Organize Your Deadlines</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button type="button" class="btn btn-outline-secondary">See more</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>All You need is a browser!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <br>
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. </p>
                <i style=" color:#5284ff" class="far fa-check-circle">Lorem ipsum dolor sit amet consectetur</i>
                <i style=" color:#5284ff" class="far fa-check-circle">Ut enim ad minim veniam quis nostrud</i>
            </div>
            <div class="col-6">
                <img src="img/grupa2.png" class="img-fluid">
            </div>
        </div>
    </div>

</div>
<div class="dragDrop">
    <div class="container">
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6">
                <h2>Drag & Drop</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <br>
                <p>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. </p>
                <a href="#"> <img src="img/arrowsleft.png" class="img-fluid"></a>
                <a href="#"><img src="img/arrowright.png" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>

<div class="powerfullPSDTemplate">
    <div class="container">
        <div class="row">
         <div class="col-12 template">
             <h1>Powerfull PSD Template</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         </div>
         <div>
                <img src="img/mockup.png" class="img-fluid">
         </div>
        <div class="col-12 template">
         <h1>Check our pricing!</h1>
        </div>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bronze Plan</h5>
                        <p class="card-text">
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#f83c7b" class="far fa-times-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#f83c7b" class="far fa-times-circle"> Lorem ipsum dolor sit am</i>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Silver Plan</h5>
                        <p class="card-text">
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#f83c7b" class="far fa-times-circle"> Lorem ipsum dolor sit am</i>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Gold Plan</h5>
                        <p class="card-text">
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                            <i style=" color:#5284ff" class="far fa-check-circle"> Lorem ipsum dolor sit am</i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 template">
            <div id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <header>
                                    <span class="banner1text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</span>
                            </header>
                        </div>
                        <div class="mt-5 col-12 ">
                            <button type="button" class="btn btn-primary">Join now</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container ">
        <div class="row">
            <div class="col-7 mt-5">
                <span style="font-size:13px;">© 2016 Merkury All Right Reserved</span>
            </div>

            <div class="col-3 mt-5">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-2 mt-5">
                <a class="footer" href="#"> <i class="fab fa-facebook-f"></i></a>
                <a class="footer" href="#"><i class="fab fa-twitter"></i></a>
                <a class="footer" href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>