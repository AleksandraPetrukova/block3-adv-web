<form action="" method="POST">
    <input type="hidden" name="toy_id" value="<?php echo $toy['toy_id']; ?>">

    <label for="toy_name">Name</label>
    <input type="text" name="toy_name" placeholder="Name" value="<?php echo $toy['toy_name']; ?>">

    <label for="species_id">Species</label>
    <select name="species_id">
        <option value="">Select Breed</option>
        <?php
        foreach ($species as $specie) {
            $selected = ($specie['species_id'] == $toy['species_id']) ? 'selected' : '';
            echo "<option value='" . $specie['species_id'] . "' $selected>" . $specie['species_name'] . "</option>";
        }
        ?>
    </select>

    <label for="toy_description">Description</label>
    <input type="text" name="toy_description" placeholder="toy_description" value="<?php echo $toy['toy_description']; ?>">

    <label for="toy_price">Price</label>
    <input type="text" name="toy_price" placeholder="toy_price" value="<?php echo $toy['toy_price']; ?>">

    <label for="toy_amount">toy_amount</label>
    <input type="text" name="toy_amount" placeholder="toy_amount" value="<?php echo $toy['toy_amount']; ?>">

    <input type="submit" name="updateToy" value="Update">
</form>