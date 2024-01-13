<h2>Add a Pet</h2>
<form method="POST"  action="?action=showpets">
    <label for="name">Name</label>
    <input type="text" name="pet_name" placeholder="Name" required>

    <label for="">Breed</label>
    <?php
        if($breeds) {
            echo "<select name='breed_id' required>";
            echo "<option value=''>Select Breed</option>";
            foreach($breeds as $breed) {
                echo "<option value='" . $breed['breed_id'] . "'>" . $breed['breed_name'] . "</option>";
            }
            echo "</select>";
        } else {
            echo 'No breeds found';
        }
    ?>

    <label> Price </label>
    <input type="text" name="pet_price" placeholder="Price" required>

    <label for=""> Age </label>
    <input type="text" name="pet_age" placeholder="Age"
    required>

    <label for="">Gender</label>
    <?php
        if ($genders) {
            echo "<select name='gender_id' required>";
            echo "<option value=''>Select Gender</option>";
            foreach ($genders as $gender) {
                echo "<option value='" . $gender['gender_id'] . "'>" . $gender['gender_name'] . "</option>";
            }
            echo "</select>";
        } else {
            echo 'No genders found';
        }
    ?>

    <label for="">Date of Birth</label>
    <input type="date" name="pet_dob" placeholder="Date of Birth" required>

    <label for="">Health Info</label>
    <textarea type="text" name="pet_health" placeholder="Health Info" required></textarea>

    <input type="submit" name="submitPet" value="Submit">

</form>