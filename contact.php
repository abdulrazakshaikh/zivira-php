<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <title>Zivira - Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
  
<!-- HEADER -->
<?php include 'components/header.php'; ?>



<main class="mainwrapper">
  <div class="mainheadwrapper">
    <div class="container">
    <div class="section-heading">
      <h1 class="page-title">Contact Us</h1>
    </div>
    </div>
  </div>
    <div class="mainbodywrapper">
      <section class="section">
          <div class="container">
            <div class="row g-4">
              <div class="col-12 col-lg-4">
                <div class="contact_feature">
                  <div class="contact_icon">
                    <i class="bi bi-house"></i>
                  </div>
                  <div class="contact_content">
                    <h6 class="contact-heading">Find Us At</h6>
                    <p class="contact-value">vigo city new york WT78,<br> Quence NY 123456, USA</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="contact_feature">
                  <div class="contact_icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact_content">
                    <h6 class="contact-heading">Get In Touch</h6>
                    <p class="contact-value">+91 9876543210</p>
                    <p class="contact-value">+91 753421890</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="contact_feature">
                  <div class="contact_icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact_content">
                    <h6 class="contact-heading">Mail Me At</h6>
                    <p class="contact-value">info@domain.in</p>
                    <p class="contact-value">sales@domain.in</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="contact-form">
            <p class="text-muted fw-bold">Please complete the form below if you want to connect with us or send us a question or comment.</p>
            <form action="">
              <div class="row">
                <div class="col-12 col-lg-4">
                  <div class="form-floating form-group">
                    <input type="text" class="form-control" id="floatingname" placeholder="placeholder">
                    <label for="floatingname" class="form-label">Full Name</label>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="form-floating form-group">
                    <input type="number" class="form-control" id="floatingPhone" placeholder="placeholder">
                    <label for="floatingPhone" class="form-label">Phone Number</label>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="form-floating form-group">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="placeholder">
                    <label for="floatingEmail" class="form-label">Email address</label>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="form-floating form-group">
                    <textarea name="" id="" style="height: 150px" class="form-control" id="floatingMessage" placeholder="placeholder"></textarea>
                    <label for="floatingMessage" class="form-label">Message</label>
                  </div>
                </div>
                <div class="col-12 col-lg-12 text-end">
                  <button type="submit" class="shadow btn btn-primary px-4 py-2 fs-6">Submit</button>
                </div>
              </div>
            </form>
            </div>
          </div>
      </section>
    </div>


    <!-- FOOTER -->
    <?php include 'components/footer.php'; ?>

</main>

<!-- Jquery -->
<script src="js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>



<!-- Custom JS -->
<script src="js/script.js"></script>


</body>
</html>