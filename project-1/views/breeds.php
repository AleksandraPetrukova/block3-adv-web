<div class="linea subnav">
    <a href="?page=addbreed">Add a Breed</a>
</div>
<div class="line"></div>

<h2>All Breeds</h2>
<article>
    <?php
        if($breeds) {
            foreach($breeds as $breed) {
                echo "<section class='card'>
                        <div class='top'>
                            <div class='id'>" . $breed['breed_id'] . "</div>
                            <div class='name'>" . $breed['breed_name'] . "</div>
                            <div class='species'>" . $breed['species_name'] . "</div>
                            <div class='maintenance'>" . $breed['maintenance_name'] . "</div>
                            <div class='avg-size'>" . $breed['avg_size_name'] . "</div>
                            <div class='description'>" . $breed['breed_description'] . "</div>
                        </div>
                        <div class='buttons'>
                            <form method='POST'>
                                <input type='hidden' name='breed_id' value='" . $breed['breed_id'] . "'>
                                <div class='button-container'>
                                    <input type='submit' name='editBreed' value='Edit'  class='submit-button'>
                                </div>
                            </form>
                        </div>
                    </section>";
            }
        } else {
            echo 'No breeds found';
        }
    ?>

</article>