<?php include ROOT . '/view/layout/header.php'; ?>
<main class="main">
    <div class="container">
        <h2 style="text-align:center" class="main__content-title"><?php echo $productById['name'] ?></h2>
        <div class="main__inner">
            
            <div class="main__content-list">
                <div class="main__content-item">
                    <img class="main__contant-image" src="<?php echo $productById['image'] ?>" alt="">
                    <h4 class="main__content-title"><?php echo $productById['name'] ?></h4>
                    <p class="main__content-price">$ <?php echo $productById['price'] ?></p>
                </div>
            </div>
            <p><?php echo $productById['description'] ?></p>
        </div>
        
    </div>
</main>
<?php include ROOT . '/view/layout/footer.php'; ?>