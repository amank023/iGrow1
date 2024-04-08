<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // You can perform further operations here like saving data to a database, sending an email, etc.

    // For demonstration purposes, just echoing the feedback
    echo "Thank you $name for your feedback!";
    exit; // Stop execution after processing the form
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        /* .container { 
           
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */

        .container h2 {
            margin-top: 60%;
            position: relative;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php include "header.php" ?>

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div class="section page-banner">

            <img class="shape-1 animation-round" src="assets/Image/shape/shape-8.png" alt="Shape">

            <img class="shape-2" src="assets/Image/shape/shape-23.png" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Feedback</li>
                    </ul>
                    <h2 class="title">Feedback <span>IGrow++</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="assets/Image/shape/shape-5.png" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="assets/Image/shape/shape-6.png" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="assets/Image/shape/shape-24.png" alt="Shape">

            <img class="shape-author" src="assets/Image/images/author 1.jpg" alt="Shape">

        </div>
<div class="container">
    <h2 class="main-title">Feedback Form</h2>
    
    <form id="feedbackForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea>
        </div>
        <div style="margin:20px;"><button type="submit">Submit</button></div>
        
    </form>
</div>

<div class="section footer-section">

<!-- Footer Widget Section Start -->
<div class="footer-widget-section">

    <img class="shape-1 animation-down" src="assets/Image/shape/shape-21.png" alt="Shape">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                <!-- Footer Widget Start -->
                <div class="footer-widget">
                    <div class="widget-logo">
                        <a href="index.php"><img src="assets/Image/Logo-1.png" width="160px" height="55px" alt="Logo"></a>
                    </div>

                    <div class="widget-address">
                        <h4 class="footer-widget-title"></h4>
                    </div>
                    
                    <ul class="widget-social">
                        <li><a href="https://www.facebook.com/igrowplusplus" target="_blank"><i class="flaticon-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/igrowplusplus/" target="_blank"><i class="flaticon-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/company/igrowplusplus/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
        <li style="margin-top: -3px;"><a href="https://www.youtube.com/@I-Growplusplus" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <!-- Footer Widget End -->

            </div>
            <div class="col-lg-6 order-md-3 order-lg-2">

                <!-- Footer Widget Link Start -->
                <div class="footer-widget-link">

                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Category</h4>

                        <ul class="widget-link">
                            <li><a href="#">All Courses</a></li>
                            <li><a href="#">International Courses</a></li>
                        </ul>

                    </div>
                    <!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Quick Links</h4>

                        <ul class="widget-link">
                            <li><a href="about.php">About</a></li>
                            <!-- <li><a href="blog.">Blog</a></li> -->
                            <li><a href="contact.php">Contact Us</a></li>
                            <!-- <li><a href="#">International Course</a></li> -->
                            <!-- <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li> -->
                        </ul>

                    </div>
                    <!-- Footer Widget End -->

                </div>
                <!-- Footer Widget Link End -->

            </div>
            <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                <!-- Footer Widget Start -->
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Office Address</h4>

                    <div class="widget-subscribe">
                        <p>Harbans Niwas Hill colony Kulti. Dist-Bardhman <br> Pin-713343 <br> West Bengal.</p>
                        <ul class="widget-info">
                            <li>
                                <p><i class="fa fa-whatsapp"></i> <a href="https://wa.me/918733060035">+91 8733060035</a></p>
                                <p><i class="flaticon-phone-call"></i> <a href="tel:+91 9832838960">+91 9832838960</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

            </div>
        </div>
    </div>

    <img class="shape-2 animation-left" src="assets/Image/shape/shape-22.png" alt="Shape">

</div>
<!-- Footer Widget Section End -->

<!-- Footer Copyright Start -->
<div class="footer-copyright">
    <div class="container">

        <!-- Footer Copyright Start -->
        <div class="copyright-wrapper">
            <!-- <div class="copyright-link">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Sitemap</a>
                <a href="#">Security</a>
            </div> -->
            <div class="copyright-text">
                <p>&copy; <?php echo date('Y');?> | All Right Reserved.<span> IGrow++ </span> Powered By <a href="https://ficuslot.com/" target="_blank">Ficuslot Innovation Pvt Ltd.</a></p>
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
</div>
<!-- Footer Copyright End -->

</div>

<!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->
    <!-- <script src="assets/js/vendor/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script>
    $(document).ready(function(){
        $('#feedbackForm').submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>',
                data: formData,
                success: function(response){
                    alert(response); // Show response from PHP
                    // You can do further handling here, like showing a success message or redirecting the user
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText); // Log any errors to console
                }
            });
        });
    });
</script> -->

</body>
</html>
