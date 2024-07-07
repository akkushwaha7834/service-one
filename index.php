<?php include_once('include/header.php'); ?>

<!-- hero section -->
<img src="./assets/img/hero-banner.jpg" alt="Hero Banner" class="img-fluid" />

<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-10 offset-lg-1 text-center">
        <h1 class="text-primary">Call Girls in Lucknow Escorts Service</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos ipsam itaque quia sit impedit enim nemo alias consectetur corporis tempore dolor iure fugiat, sed id minima doloremque quasi suscipit, beatae debitis earum, magnam blanditiis! Tempora unde consequatur ipsa assumenda deleniti. Dolores perspiciatis aliquid quibusdam doloribus dolor sequi quam, autem temporibus assumenda veniam reiciendis voluptates eius sint quod suscipit repellat! Nemo ipsum, perferendis facilis earum veritatis repellat soluta delectus. Quis numquam voluptatem porro dolores architecto velit maxime illo eveniet distinctio officia?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, deleniti alias cum tenetur aut velit deserunt consequatur harum aspernatur eaque magnam dolore culpa architecto necessitatibus labore numquam dignissimos quas soluta.</p>
      </div>
    </div>
    <div class="row gy-4">
      <?php for ($i = 0; $i < 8; $i++) { ?>
        <div class="col-lg-3 col-sm-6">
          <div class="card h-100 model-card">
            <img src="./assets/img/escort-girl.jpg" alt="" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Model Name</h5>
              <p class="card-text line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis necessitatibus cum similique incidunt itaque eveniet nobis voluptatum animi laboriosam ipsum?</p>
              <a href="#">
                <button class="btn btn-primary">Read more</button>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="text-primary mb-4">Top Cities</h2>
      </div>
    </div>
    <div class="row gy-4 row-cols-lg-5 row-cols-md-3 row-cols-2">
      <?php for ($i = 0; $i < 5; $i++) { ?>
        <div>
          <ul class="list-unstyled">
            <li>
              <a href="#">Lucknow Escort</a>
            </li>
            <li>
              <a href="#">Delhi Escort</a>
            </li>
            <li>
              <a href="#">Pune Escort</a>
            </li>
            <li>
              <a href="#">Hyderabad Escort</a>
            </li>
            <li>
              <a href="#">Noida Escort</a>
            </li>
            <li>
              <a href="#">Chennai Escort</a>
            </li>
            <li>
              <a href="#">Bangalore Escort</a>
            </li>
            <li>
              <a href="#">Bandra Escort</a>
            </li>
            <li>
              <a href="#">Mumbai Escort</a>
            </li>
          </ul>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php include_once('include/footer.php'); ?>