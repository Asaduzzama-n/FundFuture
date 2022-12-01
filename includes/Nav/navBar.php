<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <!-- navBar css -->
    <link rel="stylesheet" href="../../css/nav.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<!-- <style>
    .navContainer{
    height: 80px;
    background-color: #EEEEEE;
    }
    .leftNavigator a{
        text-decoration: none;
        color:#F98012;
        font-size: larger;
        font-weight: 500;
    }
    .logo{
        color: #455A64;
    }
    #signInBtn{
        color: #F98012;
        font-size: large;
        font-weight: 500;
        padding: 5px 20px;
        border: none;
        /* margin-right: 50px; */
    }
    #fundBtn{
        color: #455A64;
        font-size: large;
        font-weight: 500;
        border-radius: 10px;
        padding: 5px 25px;
        border: 2px solid #455A64;
        margin-left: 50px;

    }

</style> -->



<body>

    <section class="mb-3">
        <nav>
            <div class="navContainer d-flex justify-content-around align-items-center p-5">
                <div class="leftNavigator">
                    <a href="#">How it works</a>
                </div>
                <div class="logo">
                    <h3>Funding Future</h3>
                </div>

                <div class="btnGrp">
                    <button id="signInBtn">Sign in</button>
                    <button id="fundBtn">start a fund</button>
                </div>
            </div>
        </nav>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>