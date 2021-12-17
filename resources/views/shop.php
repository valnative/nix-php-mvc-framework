<main class="main">
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <?php
          foreach ($products as $value)
          ?>
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src=" <?php
            echo $value['photo'] ?> " alt="<?php
            echo $value['name'] ?>"/>
            <div class="card-body p-4">
              <div class="text-center">
                <h5 class="fw-bolder"><?php
                    echo $value['name'] ?></h5>
                <span>$</span><span><?php
                      echo $value['price'] ?></span>
              </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
</main>