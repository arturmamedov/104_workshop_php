<?php

//var_dump($_POST);
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include __DIR__ . '/layouts/head.php';
include __DIR__ . '/Helpers/function.php';

?>


<main>
  <div class="banner bg-dark text-white py-3">
    <div class="container">
      <h3>Home Page </h3>
        <?php if (isset($_SESSION['user_name'])): ?>
            <h2>Welcome <?php echo session('user_name'); ?></h2>
        <?php endif; ?>
    </div>
  </div>


  <div class="container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia animi omnis nesciunt aperiam aspernatur maiores, tempora laboriosam architecto eligendi consequatur laborum, vitae dicta, asperiores accusantium? Nesciunt libero ex recusandae porro!</p>
  </div>

</main>


<?php

include __DIR__ . '/layouts/footer.php';
