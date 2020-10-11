<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--                     Font awesome-->
    <script src="https://kit.fontawesome.com/10cd2eeed0.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0px;
            padding: 0px;

        }
        .btn {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: #f1f1f1;
            margin: 10px;
            border-radius: 30px;
            box-shadow: 0 5px 15px -5px #00000070;
            color: #3498db;
            overflow: hidden;
            position: relative;
        }

        .btn i {

            line-height: 46px;
            /*align itam in center*/
            font-size: 20px;
            transition: 0.2s linear;
        }

        .btn:hover i {
            transform: scale(1.3);
            color: #f1f1f1;


        }

        .btn::before {
            content: "";
            position: absolute;
            width: 120%;
            height: 120%;
            background: #3498db;
            transform: rotate(45deg);
            left: -110%;
            top: 90%;
            left: 10%;

        }

        .btn:hover::before {
            animation: aaa 0.7s 1;
            top: -10%;
        }

        @keyframes aaa {
            0% {
                left: -110%;
                top: 90%;
            }

            50% {
                left: 10%;
                top: 90%;

            }

            100% {
                top: -10%;
                left: 10%;
            }
        }

    </style>

</head>

<body>
    <!-- Footer -->
    <footer class="container-fluid bg-dark text-white  pt-3">
        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <a class="btn" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn" href="#">

                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn" href="#">
                        <i class="fab fa-google"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn" href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-1">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> GMblooddonation Camp</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

