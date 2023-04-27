<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <style>
        *{
            box-sizing: border-box;
            outline: none;
            text-decoration: none;
        }

        .slider {
            position: relative;
        }

        .slider .slide {
            min-height: 85vh;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 20px 9%;
            padding-bottom: 70px;
        }

        .slider .slide .content {
            flex: 1 1 350px;
            animation: slideContent .4s linear .6s backwards;
        }

        @keyframes slideContent{
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
        }

        .slider .slide .image {
            flex: 1 1 500px;
        }

        .slider .slide .image img {
            width: 100%;
            animation: slideImage .4s linear .6s backwards;
        }

        @keyframes slideImage{
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
        }

        .slider .slide .content h3{
            font-size: 35px;
            color: #333;
        }

        .slider.slide .content p{
            font-size: 16px;
            color: #666;
            padding: 10px 0;
        }

        .slider .slide .content .btn{
            margin-top: 10px;
            display: inline-block;
            background: #666;
            color: #fff;
            font-size: 17px;
            padding: 9px 40px;
        }

        .slider .slide .content .btn:hover{
            background: #333;
        }

        .slider .slide {
            display: none;
        }

        .slider .active{
            display: flex;
        }

        .slider .slide:nth-child(1) {
            background: linear-gradient(90deg,#f9f9f9 70%, #ffff99 30.1%);
        }

        .slider .slide:nth-child(2) {
            background: linear-gradient(90deg,#f9f9f9 70%, #ff9090 30.1%);
        }

        .slider .slide:nth-child(3) {
            background: linear-gradient(90deg,#f9f9f9 70%, #99bbff 30.1%);
        }

        .slider #prev,
        .slider #next{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            background: #333;
            height: 50px;
            width: 40px;
            line-height: 50px;
            font-size: 25px;
            text-align: center;
            cursor: pointer;
            font-weight: bolder;
        }

        .slider #prev:hover,
        .slider #next:hover{
            background: #666;
        }

        .container #prev {
            left: 20px;
        }

        .container #next {
            right: 20px;
        }

        @media (max-width: 500px){
            .container #prev {
            left: 0px;
            top: 60%;
        }

        .container #next {
            right: 0px;
            top: 60%;
        }

        
        }
    </style>
    <div class="container">
            <nav class="navbar navbar-light bg-info">
                <div class="container-fluid">
                  <a class="navbar-brand">Elimu </a>
                  <form class="d-flex">
                    <a href="login.php" class="text-decoration-none text-white border border-danger rounded p-1 text-align-center">
                        Login
                    </a>
                  </form>
                </div>
            </nav>
            <div class="slider">
                    <div class="slide active">
                        <div class="content">
                            <h3>Student Perfomance</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio sequi, ipsam eum, cumque sapiente enim voluptatem animi libero sed temporibus rerum quia aut! 
                                Dignissimos ut odit, quo quod sequi laboriosam.</p>
                            <a href="#" class="btn pr-3">Learn More</a>
                        </div>
                        <div class="image">
                            <img src="images/school.png" alt="stud">
                        </div>
                    </div>
                
                    <div class="slide">
                        <div class="content">
                            <h3>Staff Management</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio sequi, ipsam eum, cumque sapiente enim voluptatem animi libero sed temporibus rerum quia aut! 
                                Dignissimos ut odit, quo quod sequi laboriosam.</p>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                        <div class="image">
                            <img src="images/hr.svg" alt="stud">
                        </div>
                    </div>
                
                    <div class="slide">
                        <div class="content">
                            <h3>Finance Management</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio sequi, ipsam eum, cumque sapiente enim voluptatem animi libero sed temporibus rerum quia aut! 
                                Dignissimos ut odit, quo quod sequi laboriosam.</p>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                        <div class="image">
                            <img src="images/finance.jpg" alt="stud">
                        </div>
                    </div>

                    <div id="prev" onclick=prev()> < </div>
                    <div id="next" onclick=next()> > </div>
            </div>

            <div class="container-fluid bg-info d-flex justify-content-center pt-2">
                <p class="text-white">Designed by Cotek Technologies.</p>
            </div>
    </div>

    <script>
        let slides = document.querySelectorAll('.slide');
        let index = 0;

        // next function
        function next(){
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active')
        }
        // previous function
        function prev(){
            slides[index].classList.remove('active');
            index = (index - 1 + slides.length) % slides.length;
            slides[index].classList.add('active')
        }

        // autoplay
        setInterval(next, 7000);

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>