<h2>Edit Breed</h2>

<div class="closeX">
    <a href="?page=breeds">
        <i class="fa-solid fa-xmark"></i>
    </a>
</div>

<form method="POST">
    <input type="hidden" name="breed_id" value="<?php echo $breed['breed_id']; ?>">

    <label for="breed_name">Name</label>
    <input type="text" name="breed_name" placeholder="Name" value="<?php echo $breed['breed_name']; ?>">

    <label for="species_id">Species</label>
    <select name="species_id">
        <option value="">Select Specie</option>
        <?php
        foreach ($species as $specie) {
            $selected = ($specie['species_id'] == $breed['species_id']) ? 'selected' : '';
            echo "<option value='" . $specie['species_id'] . "' $selected>" . $specie['species_name'] . "</option>";
        }
        ?>
    </select>

    

    <label for="">Avg size</label>
    <select name="avg_size_id">
        <?php
        foreach($avg_sizes as $avg_size) {
            $selected = ($avg_size['avg_size_id'] == $breed['avg_size_id']) ? 'selected' : '';
            echo "<option value='" . $avg_size['avg_size_id'] . "' $selected>" . $avg_size['avg_size_name'] . "</option>";
        }
        ?>
    </select>

    <label for="">Maintenance</label>
    <select name="maintenance_id">
        <?php
        foreach($maintenances as $maintenance) {
            $selected = ($maintenance['maintenance_id'] == $breed['maintenance_id']) ? 'selected' : '';
            echo "<option value='" . $maintenance['maintenance_id'] . "' $selected>" . $maintenance['maintenance_name'] . "</option>";
        }
        ?>
    </select>

    <label for="breed_description">Description</label>
    <textarea type="text" name="breed_description" placeholder="breed_description">
    <?php echo $breed['breed_description']; ?>
    </textarea>

    <input type="submit" name="updateBreed" value="Update">

</form>
