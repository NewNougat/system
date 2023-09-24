<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book | Paesano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #img{
            width: 75px;
            height: 70px;
        }

        .img{
            width: 500px;
            height: 400px;
        }
    </style>
</head>
<body>

<!--Navbar-->

<nav class="navbar navbar-expand-lg bg-white sticky-top shadow p-3 mb-5 ">
  <div class="container-sm">
    <img src="img/paesano_logo.jpg" id="img"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="book.php">Book</a>
      </div>
    </div>
  </div>
</nav>

<!--Modal-->
<?php include 'modals.php'; ?>

<div class="d-sm-flex flex-column container-sm mt-5 mb-5">
    <div class="p-2">
        <h1 class="h1">✂️ Book Your Appointment – Unleash Your Style! ✂️</h1>
        <p class="lead">
        Ready to elevate your grooming game? Booking an appointment at Paesano Barber Shop is a breeze. Simply select a date and time that suits you best, and let our master barbers work their magic.
        </p>
    </div>
    <div class="container-sm">
        <div class="row row-cols-sm-2 row-cols-md-4 justify-content-sm-center">
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber1">Barber 1</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber2">Barber 2</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber3">Barber 3</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber4">Barber 4</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 5</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber5">Barber 5</button>
            </div>
        </div>
        <div class="card m-2">
            <img src="img/img3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">Barber 6</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barber6">Barber 6</button>
            </div>
        </div>
    </div>
    </div>
</div>

<!--Footer-->

<div class="bg-dark text-white p-5">
    <div class="container-sm d-sm-flex align-items-start">
        <div class="d-sm-flex flex-sm-column flex-md-column align-items-sm-center ">
            <div><img src="img/paesano_logo.jpg" id="img" class="rounded"/></div>
            <div><h1 class="fs-5">Paesano</h1></div>
        </div>
        <div class="d-sm-flex d-md-flex flex-sm-row flex-md-column">
            <div class="">
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                    <i class="fa-solid fa-home fa-xl mb-2"></i>
                    <span class="m-2">
                        <h5>Marina st., Darapidap rd.</h5>
                        <p>San Antonio Candon City Ilocos Sur</p>
                    </span>
                </div>
                
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                    <i class="fa-solid fa-phone fa-xl mb-2"></i>
                    <span class="m-2">
                        <h5>09771043166</h5>
                        <p>Everyday, 9AM to 5PM</p>
                    </span>
                </div>
            
                <div class="mx-4 d-sm-flex d-md-flex flex-sm-row flex-md-row align-items-sm-center align-items-md-center">
                   <i class="fa-solid fa-envelope fa-xl mb-2"></i>
                   <span class="m-2">
                       <h5>paesanobarbershop
                        @gmail.com</h5>
                       <p>Email us your query</p>
                   </span>
                </div>
            </div>
        </div>
        <div class="d-sm-flex flex-sm-column">
            <form action="contactForm.php" method="post">
                <h1 class="h6">Contact Us!</h1>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                    <input type="text" name="name" class="form-control" aria-label="Name" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    <input type="email" name="email" class="form-control" aria-label="Email" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Subject</span>
                    <input type="text" name="subject" class="form-control" aria-label="Subject" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Message</span>
                    <textarea type="text" name="message" class="form-control" aria-label="Message" aria-describedby="inputGroup-sizing-sm"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>