<h2>Add a Breed</h2>
<form method="POST" action="?action=showbreeds">
    <label for="name">Name</label>
    <input type="text" name="breed_name" placeholder="Name" required>

    <label for="">Species</label>
    <?php
        if ($species) {
            echo "<select name='species_id' required>";
            echo "<option value=''>Select specie</option>";
            foreach ($species as $specie) {
                echo "<option value='" . $specie['species_id'] . "'>" . $specie['species_name'] . "</option>";
            }
            echo "</select>";
        } else {
            echo 'No species found';
        }
?>


    <label for="">Avg Size</label>
    <?php
        if ($avg_sizes) {
            echo "<select name='avg_size_id' required>";
            echo "<option value=''>Select avg sizes</option>";
            foreach ($avg_sizes as $avg_size) {
                echo "<option value='" . $avg_size['avg_size_id'] . "'>" . $avg_size['avg_size_name'] . "</option>";
            }
            echo "</select>";
        } else {
            echo 'No genders found';
        }
    ?>

    <label for="">Maintenance</label>
    <?php
        if ($maintenances) {
            echo "<select name='maintenance_id' required>";
            echo "<option value=''>Select avg sizes</option>";
            foreach ($maintenances as $maintenance) {
                echo "<option value='" . $maintenance['maintenance_id'] . "'>" . $maintenance['maintenance_name'] . "</option>";
            }
            echo "</select>";
        } else {
            echo 'No maintance found';
        }
    ?>

    <label for="">Description</label>
    <textarea type="text" name="breed_description" placeholder="breed_description" required>
    </textarea>

    <input type="submit" name="submitBreed" value="Submit">

</form>