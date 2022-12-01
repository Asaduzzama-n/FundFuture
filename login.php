<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundFuture</title>
   <link rel="stylesheet" href="./css/login.css">
    <!-- bootstrap link file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/744d788fd4.js" crossorigin="anonymous"></script>
</head>

<style>
    .loginContainer{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 700px;
    width: 80%;
    /* background-color: #455A64; */
    margin: auto;
    /* background-color: #EDEDED; */
}
.imgContainer{
    width: 50%;
    margin-right: 20px;
}
.imgContainer img{
    /* height: 50%; */
    width: 100%;
    border-radius: 10px;
    
}

input{
    border: none;
    margin-top: 20px;
    outline: none;
    /* background-color: #EDEDED; */
    
}
h1{
    color: #455A64;
}
.formContainer{
    margin-left: 20px;
    /* background-color: #EDEDED; */
}
.userIdContainer{
    border-bottom: 2px solid #455A64;
   
}
.userIdContainer i{
    color: #455A64;
}
.passwordContainer{
    border-bottom: 2px solid #455A64;
    
}
.passwordContainer i{
    color: #455A64;
}
.btnGrp{
    /* text-align: center; */
    display: flex;
    justify-content: space-between;
}
.btnGrp button{
    width: 90px;
    /* border: 1px solid #F98012; */
    background-color: #EDEDED;
    border: none;
    color: #455A64;
    font-weight: 500;
    padding: 5px 10px;
    border-radius: 10px;
    
    
}
.btnGrp button:hover{
    color: #F98012;
}
.btnGrp a{
    text-decoration: none;
    color: #455A64;
}
.btnGrp a:hover{
    color: #F98012;
}
</style>


<body>
    <section class="container">

        <div class="loginContainer">
            <div class="imgContainer">
                <img src="./images/carousel/1902_i003_009_s.jpg" width="400px" alt="">
            </div>
            <div class="formContainer">
                <form action="" method="POST">
                    <h1>FundingFuture</h1>
                    <div class="userIdContainer">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="userId" name="userId" placeholder="ID" require>
                    </div>
                    <div class="passwordContainer">
                         <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" require>
                    </div>
                    <div class="btnGrp mt-4">
                        <button type="submit">Login</button>
                        <a href="#">Forget Password</a>
                    </div>
                    
                </form>
            </div>
        </div>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>