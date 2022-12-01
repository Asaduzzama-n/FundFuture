<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundFuture</title>

    <!-- index.css file -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- carousel css file -->
    <link rel="stylesheet" href="./css/carousel.css">
    <!-- navBar css file -->
    <link rel="stylesheet" href="./css/nav.css">
    <!-- footer css file -->
    <link rel="stylesheet" href="./css/footer.css">
    <!-- login css file -->
    <link rel="stylesheet" href="./css/login.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/744d788fd4.js" crossorigin="anonymous"></script>

</head>


<body>

    <header>
        <?php include './includes/Nav/navBar.php' ?>
    </header>

    <main>
        <section>
            <?php include './includes/Carousel/carousel.php' ?>
        </section>

        <section>
            <div class="demoContainer mt-5">
                <h3>What to Expect</h3>
                <h1>Fundraising on FundingFuture <br> takes just a few minutes</h1>
                <img src="./images/others/Group 4.png" alt="">
            </div>
        </section>

        <section class="mt-5">
            <div class="featuredTopics">
                <div class="featuredTopic">
                    <h4>Where you can help</h4>
                    <h1>Featured Topics</h1>
                </div>

                <!-- campaign story part begins from here -->

                <div class="campaignStories mt-5">

                    <!-- Custom Card starts here -->
                    <div class="customCard">
                        <div class="imgContainer">
                            <img class="mt-2" src="./images/others/scober.jpeg" alt="">
                        </div>
                        <div class="description mt-3">
                            <h4>Lorem, ipsum.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Animi, nemo.</p>
                        </div>
                        <div class="progressBar mt-5">
                            <div class="progressStatus"></div>
                        </div>
                        <div class="helpBtn">
                            <button>Help Now <i class="fa-sharp fa-solid fa-chevron-right fa-sm"></i></button>
                        </div>
                    </div>
                    <!-- card ends here -->

                    <div class="seeAllBtn">
                        <button class="mt-5 ">See all Fundraisers</button>
                    </div>
                </div>
            </div>

        </section>



        <!-- success story part begins from here -->
        <section class="mt-5">
        <div class="successStories ">
            <div class="featuredTopics">
                <div class="featuredTopic">
                    <p>Featured Topics</p>
                    <h1>Success Stories</h1>
                </div>

                <!-- Custom Card starts here -->
                <div class="customCard mt-5">
                    <div class="imgContainer">
                        <img class="mt-2" src="./images/others/scober.jpeg" alt="">
                    </div>
                    <div class="description mt-3">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Animi, nemo.</p>
                    </div>
                    <div class="progressBar mt-5">
                        <div class="progressStatus"></div>
                    </div>
                    <div class="helpBtn">
                        <button>Help Now <i class="fa-sharp fa-solid fa-chevron-right fa-sm"></i></button>
                    </div>
                </div>
                <!-- card ends here -->

                <div class="seeAllBtn mt-5">
                    <button>See all Success Story</button>
                </div>
            </div>
        </div>

        </section>



    </main>







    <footer class="mt-5">
        <?php include './includes/Footer/footer.php' ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>