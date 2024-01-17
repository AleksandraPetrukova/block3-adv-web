<h1>Dashboard</h1>

<a href="index.php?controller=logout">Log out</a>

<section>
    <?php
        include_once('controllers/controller-cat.php');
        foreach ($cats as $cat) {
            echo '<p>' . $cat->name . '</p>';
        }
    ?>
</section>