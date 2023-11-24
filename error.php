<?php include("includes/header.php"); ?>

<section class="breadcrumb-section">
    <div class="container">
        <div class="page-title"> 404 Page</div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">404 Page</li>
            </ol>
        </nav>
    </div>
</section>
<div class="container error custom-margin section-padding">
    <div class="d-flex">
        <figure><img src="./images/error.png" alt=""></figure>
        <p>404</p>
    </div>
    <span>Page not Found</span>
    <p>We are sorry, the page you’re looking for does not exist.</p>
    <a href="index.php" class="button">Home</a>
</div>

<?php include("includes/footer.php"); ?>