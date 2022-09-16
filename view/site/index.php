<?php include ROOT . '/view/layout/header.php'; ?>
<main class="main">
    <div class="container">
        <div class="main__inner">
            <aside class="main__aside">
                <h2 class="main__aside-title">Каталог</h2>
                <ul class="main__aside-list">

                    <?php foreach ($categories as $categoryItem) : ?>

                        <li class="main__aside-item">
                            <a href="/catalog/<?php echo $categoryItem['id']; ?>" class="main__aside-link">
                                <?php echo $categoryItem['name']; ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
            </aside>
            <div class="main__content-list">

                <?php foreach ($latestProduct as $productItem) : ?>
                    <a href="/products/<?php echo $productItem['id'] ?>">
                        <div class="main__content-item">
                            <img class="main__contant-image" src="<?php echo $productItem['image'] ?>" alt="">
                            <h4 class="main__content-title"><?php echo $productItem['name'] ?></h4>
                            <p class="main__content-price">$ <?php echo $productItem['price'] ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</main>
<?php include ROOT . '/view/layout/footer.php'; ?>