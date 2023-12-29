<h2>Edit Species</h2>

<form method="POST">
    <input type="hidden" name="species_id" value="<?php echo $species['species_id']; ?>">

    <label for="species_name">Name</label>
    <input type="text" name="species_name" placeholder="Name" value="<?php echo $species['species_name']; ?>">

    <label for="species_avg_lifespan">Average lifespan(years)</label>
    <input type="text" name="species_avg_lifespan" placeholder="Avg lifespan" value="<?php echo $species['species_avg_lifespan']; ?>">

    <label for="species_age">Description</label>
    <textarea type="text" name="species_description" placeholder="Description" >
        <?php echo $species['species_description']; ?>
    </textarea>

    <input type="submit" name="updateSpecies" value="Update">
</form>