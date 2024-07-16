<?php include_once('include/header.php'); ?>

<!-- hero section -->
<img src="./assets/img/banner.webp" alt="Hero Banner" class="img-fluid pe-none" width="100%" />

<section>
    <div class="container">
        <div class="row gy-4">
            <div class="col-8">
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
            <div class="col-4">
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
            <div class="col-12">
                
            </div>
        </div>
    </div>
</section>

<!-- <section class="bg-light-subtle">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center">
                <h2 class="text-primary mb-4">Escorts</h2>
            </div>
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-md-6">
                    <div class="card overflow-hidden escort-card">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <a href="#">
                                    <img src="./assets/img/gallery-1.webp" class="img-fluid escort-img" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title text-primary">Model Name</h5>
                                    </a>
                                    <p class="card-text line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, possimus exercitationem? Natus odio iusto dignissimos optio, quisquam amet officiis consequuntur?</p>
                                    <p class="card-text">
                                        <small class="text-primary border rounded p-2">Female</small>
                                        <small class="text-primary border rounded p-2">21 Yrs</small>
                                    </p>
                                    <p class="card-text text-body-secondary text-end">
                                        <a href="#" class="badge rounded-pill text-bg-success py-2 px-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="1em" fill="rgba(255,255,255,1)">
                                                <path d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z"></path>
                                            </svg>
                                            <span>Whatsapp</span>
                                        </a>
                                        <a href="#" class="badge rounded-pill text-bg-primary py-2 px-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)" height="1em">
                                                <path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path>
                                            </svg>
                                            <span>Call</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section> -->

<?php include_once('include/footer.php'); ?>