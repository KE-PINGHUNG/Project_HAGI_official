<!doctype html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hagi官方網站</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="./website_p01.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">訂購指南</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user fa-lg fa-fw"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">登入會員</a></li>
                            <li><a class="dropdown-item" href="#">註冊新會員</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">我的帳戶</a></li>
                            <li><a class="dropdown-item" href="#">訂單查詢</a></li>
                            <li><a class="dropdown-item" href="#">專屬優惠卷</a></li>
                            <li><a class="dropdown-item" href="#">收藏清單</a></li>
                        </ul>
                    </li>
            </div>
            <div class="row"><img src="./images/IMG_45931.png" class="img-fluid" alt=""></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <a class="navbar-brand"></a>
            <form class="d-flex" role="search">
                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i
                            class="fas fa-search fa-lg"></i></button></span>
                <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search">
                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i
                            class="fa-solid fa-cart-shopping"></i></button></span>
            </form>
        </div>
    </nav>
    <section class="content">
         <div class="container-fluid even">
            <div class="vplay col-md-12">
                <iframe src="https://www.youtube.com/embed/bd_lqbfUp_c?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1&playlist=bd_lqbfUp_c" frameborder="0" allowfullscreen></iframe>
                <!-- 替換影片取代碼 embed後?前 &palylist=後neC3M3IMagQ取代即可 -->
            </div>
            <!-- <div class="video-caption text-center">
                <div class="animated flip delay-1s">
                    <h1><span id="js-rotating"></span></h1>    
                </div>
            </div> -->
        </div>
    </section>
    <section class="production">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="restevation">
        <div class="container-fluid" >
            <div class="wrapper col-md-10 offset-1 my-5">
                <header>
                    <p class="current-date mx-5"></p>
                    <!-- <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                    </div> -->
                </header>
                <div class="calendar">
                    <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul class="days"></ul>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="footer">
        <div class="container-fluid">
            <section class="row d-flex justify-content-center my-5">
                <div class="row col-md-3  "></div>
                <div class="row col-md-1 "><a href="#"><img src="./images/line-app-logo-line-app-.gif" alt="line" width="30vw"
                            height="30vw"></a></div>
                <div class="row col-md-1 "><a href="#"><img src="./images/facebook.svg" alt="facebook" width="30vw"
                            height="30vw"></a></div>
                <div class="row col-md-1 "><a href="#"><img src="./images/instagram.svg" alt="instagram" width="30vw"
                            height="30vw"></a></div>
                <div class="row col-md-3 "></div>
            </section>
            <h1>service</h1>
            <nav>
                <ul>
                    <li><a href="./20250619.html">聯絡我們</a></li>
                    <li><a href="./aboutus.html">退換貨政策</a></li>
                    <li><a href="./singup.html">隱私權政策</a></li>
                    <li><a href="./contactus.html">服務條款</a></li>
                </ul>
            </nav>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./jquery.min.js"></script>
    <script type="text/javascript" src="./bootstrap-5.3.6-dist/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>