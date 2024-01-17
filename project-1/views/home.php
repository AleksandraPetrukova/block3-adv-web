
<!-- <div class="line"></div> -->

<h2>All Species</h2>

<div class="linea subnav">
    <a href="?page=addspecie"> Add a Specie</a>
</div>

<article>
    <?php
        if($users) {
            foreach($users as $user) {
                echo "<section class='card'>
                        <div class='top'>
                            <div class='id'>" . $user['species_id'] . "</div>
                            <div class='name'>" . $user['species_name'] . "</div>
                            <div class='lifespan'>" . $user['species_avg_lifespan'] . "</div>
                            <div class='description'>" . $user['species_description'] . "</div>
                        </div>
                        <div class='buttons'>
                            <form method='POST'>
                                <input type='hidden' name='species_id' value='" . $user['species_id'] . "'>
                                <div class='button-container'>
                                    <input type='submit' name='editSpecies' value='Edit'  class='submit-button'>
                                </div>
                            </form>
                        </div>
                    </section>";
            }
        } else {
            echo 'No users found';
        }
    ?>
</article>