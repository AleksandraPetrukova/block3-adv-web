


<h2>All Pets</h2>

<div class="linea subnav">
    <a href="?page=addpet">Add a Pet</a>
    <a href="?page=species">Species</a>
    <a href="?page=breeds">Breeds</a>
</div>
<!-- <div class="line"></div> -->

<article>
    <?php
        if($pets) {
            foreach($pets as $pet) {
                echo "<section class='card'>
                        <div class='top'>
                            <div class='id'>" . $pet['pet_id'] . "</div>
                            <div class='name'>" . $pet['pet_name'] . "</div>
                            <div class='gender'>" . $pet['gender_name'] . "</div>
                            <div class='age'>" . $pet['pet_age'] . "</div>
                            <div class='dob'>" . $pet['pet_dob'] . "</div>
                            <div class='breed'>" . $pet['breed_name'] . "</div>
                            <div class='species'>" . $pet['species_name'] . "</div>
                            <div class='health'>" . $pet['pet_health_info'] . "</div>
                            <div class='maintenance'>" . $pet['maintenance_name'] . "</div>
                            <div class='price'>" . $pet['pet_price'] . "</div>
                        </div>
                        <div class='buttons'>
                            <form method='POST'>
                                <input type='hidden' name='pet_id' value='" . $pet['pet_id'] . "'>
                                <div class='button-container'>
                                    <input type='submit' name='deletePet' value='Delete'  class='submit-button'>
                                    <input type='submit' name='editPet' value='Edit'  class='submit-button'>
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