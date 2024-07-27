<?php include_once('include/header.php'); ?>

<!-- hero section -->
<img src="./assets/img/banner.webp" alt="Hero Banner" class="img-fluid pe-none banner-img" width="100%" />

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <h1 class="mb-3">Avaliable 24x7 Contact anytime</h1>
                <p class="mb-2">
                    <strong>Phone:</strong>
                    <span class="text-decoration-underline">+91 9999999999</span>
                </p>
                <p>
                    <strong>E-mail:</strong>
                    <span class="text-decoration-underline">contact@website.com</span>
                </p>
                <h2>Lorem ipsum dolor sit</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus odit, modi quae nesciunt molestiae deleniti ipsa rerum debitis consequatur minima voluptas incidunt libero omnis natus maxime in possimus tenetur dignissimos dolorem tempora. Hic aspernatur consequatur esse itaque repudiandae obcaecati! Quod!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, reiciendis?</p>
            </div>
            <div class="col-lg-4">
                <div class="bookform">
                        <h3 class="mb-3 text-white">
                            Lorem Ipsum
                        </h3>
                        <form action="call_back.php" method="POST" name="Book Now">
                            <div class="form-group">
                                <input aria-describedby="emailHelp" class="form-control" id="your_name" name="your_name" placeholder="Enter Your Name" required="" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Mobile No." required="" type="tel">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email_id" id="email_id" placeholder="Enter Email Address" required="">
                              </div>
                            <div class="form-group">
                                <textarea class="form-control" id="cistomer_query" name="customer_query" placeholder="Your Query"></textarea>
                            </div>

                            <button class="btn bttn_form" name="submit" type="submit">
                                Book Now
                            </button>
                        </form>
                    </div>
            </div>

        </div>
    </div>
</section>


<?php include_once('include/footer.php'); ?>