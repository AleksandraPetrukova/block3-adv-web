<h2>Edit Pet</h2>

<div class="closeX">
    <a href="?page=pets">
        <i class="fa-solid fa-xmark"></i>
    </a>
</div>

<form method="POST" action="?action=showpets">
    <input type="hidden" name="pet_id" value="<?php echo $pet['pet_id']; ?>">

    <label for="pet_name">Name</label>
    <input type="text" name="pet_name" placeholder="Name" value="<?php echo $pet['pet_name']; ?>">

    <label for="breed_id">Breed</label>
    <select name="breed_id">
        <option value="">Select Breed</option>
        <?php
        foreach ($breeds as $breed) {
            $selected = ($breed['breed_id'] == $pet['breed_id']) ? 'selected' : '';
            echo "<option value='" . $breed['breed_id'] . "' $selected>" . $breed['breed_name'] . "</option>";
        }
        ?>
    </select>

    <label for="pet_price">Price</label>
    <input type="text" name="pet_price" placeholder="Price" value="<?php echo $pet['pet_price']; ?>">

    <label for="pet_age">Age</label>
    <input type="text" name="pet_age" placeholder="Age" value="<?php echo $pet['pet_age']; ?>">

    <label for="">Gender</label>
    <select name="gender_id">
        <option value="">Select Gender</option>
        <?php
        foreach($genders as $gender) {
            $selected = ($gender['gender_id'] == $pet['gender_id']) ? 'selected' : '';
            echo "<option value='" . $gender['gender_id'] . "' $selected>" . $gender['gender_name'] . "</option>";
        }
        ?>
    </select>

    <label for="pet_dob">Date of Birth</label>
    <input type="date" name="pet_dob" placeholder="Date of Birth" value="<?php echo $pet['pet_dob']; ?>">

    <label for="pet_health">Health</label>
    <textarea type="text" name="pet_health" placeholder="Health Info" value="">
    <?php echo $pet['pet_health_info']; ?>
    </textarea>

    <input type="submit" name="updatePet" value="Update">
</form>