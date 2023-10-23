<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Nasr | Payment</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
</html>
<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-0">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img src="img/Logo (1).png" height="50" alt="MDB Logo" loading="lazy" />
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <!-- Left links -->
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="product.php">Packages</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active text-warning" href="#">Cart</a>
            </li>
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
          <!-- button -->
            <button type="button" class="btn btn-warning shadow-0 text-capitalize">Contact Us</button>

        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- payment -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 border border-1 rounded py-4 px-4">
                <div class="d-flex flex-row justify-content-between">
                    <img class="h-25" src="img/trash1.png" alt="">
                    <p>Umrah Package Details</p>
                </div>
                <hr class="m-0">
                <div class="scroll">
                    <div class="mt-3">
                            <div style="height: 20%;" class="scroll d-flex flex-row justify-content-between bg-light pt-3 px-3 rounded-4">
                                <div class="col-md-4 mt-2">
                                    <button class="bg-transparent border-0"><i class="far fa-trash-can text-success"></i></button>
                                    <button style="width: 15%; height: 35%;" class="btn-floating bg-transparent border border-1 me-1">-</button>
                                    <input class="border-0 bg-light" style="width: 20px;" type="text" id="quantity-input" value="1">
                                    <button style="width: 15%; height: 35%;" class="btn-floating bg-transparent border border-1">+</button>
                                </div>
                                <div class="main">
                                    <p class="mb-0">Al Nasr Special Umrah 9 Days</p>
                                    <p style="font-size: 13px;" class="mt-0 text-end text-muted">$ 1,950</p>
                                </div> 
                            </div>
                    </div>
                </div>
                <hr class="mt-5">
                <div class="d-flex flex-row justify-content-between">
                    <p class="text-muted" style="font-size: 13px;">$ 3,900</p>
                    <p>Umrah 9 Days</p>
                </div>
                <hr class="m-0 mb-4">
                <div class="d-flex flex-row justify-content-between">
                    <p class="text-muted" style="font-size: 13px;">$ 3,900</p>
                    <p>Total</p>
                </div>
                <button class="btn btn-warning w-100" type="button">Buy <img src="img/card.png" alt=""></button>
            </div>
            <div class="col-md-7">
                <div class="discount d-flex flex-row border border-1 align-items-center rounded py-1 px-5">
                    <button type="button" class="btn btn-info w-25 h-50 me-3 shadow-0 text-capitalize">Use Discount</button>
                    <div class="form-outline mb-4 w-50 me-5 mt-4">
                        <input type="text" id="form2Example1" class="form-control" />
                        <label class="form-label" for="form2Example1">Discount</label>
                    </div>
                    <div class="discount-p d-flex flex-row mt-3">
                        <p class="me-2">Discount</p> <img height="20" src="img/discount-shape.png" alt="">
                    </div>
                </div>

                <a href="">
                    <div class="debit d-flex flex-row border border-1 text-dark justify-content-center align-items-center rounded pt-4 pb-2 px-5 mt-4">
                        <img class="me-3 mb-3" src="img/card-pos.png" alt="">
                        <div class="debit-p lh-1 text-center">
                            <p style="font-size: 14px;">Debit/Kredit</p>
                            <p class="mt-0" style="font-size: 10px;">PAYMENT METHOD</p>
                        </div>
                    </div>
                </a>
                
                <div class="bank border border-1 d-flex flex-row justify-content-center rounded py-4 mt-4">
                    <div class="bank-img">
                        <div class="d-flex flex-row justify-content-center">
                           <p class="me-2">Payment</p> <img height="20" src="img/card.png" alt=""> 
                        </div>
                        <a href="">
                            <img src="img/Bank 2.png" alt="">
                        </a>
                        <a href="">
                            <img src="img/Bank 3.png" alt="">
                        </a>
                        <a href="">
                            <img src="img/Bank.png" alt="">
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end payment -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted" style="background-color: #1DA599 ;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="img/Logo Text.png" alt="">
                        </h6>
                        <p   class="p">
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4  p">
                            Package Hajj
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Hajj Silver</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Hajj Glod</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Hajj Priority</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 p">
                            Package Umrah
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Umrah Bronze</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Umrah Silver</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Umrah Glod</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Al Nasr Umrah Priority</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 p">Contact</h6>
                        <p class="p"><i class="fas fa-home me-3 text-secondary"></i> Pesantren Al-Nasr, Jalan Pahlawan No. 123, Kecamatan Sukabumi, Kota Sukabumi, Jawa Barat 43121, Indonesia</p>
                        <p class="p"><i class="fas fa-envelope me-3 text-secondary"></i> info@pesantrenalnasr.com</p>
                        <p class="p"><i class="fas fa-phone me-3 text-secondary"></i> +62 123 456 7890</p>    
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="">al-nasr.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>