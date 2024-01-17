<h2>Add a Toy</h2>
<form method="POST" action="?action=showtoys">
    <label for="name">Name</label>
    <input type="text" name="toy_name" placeholder="Name" required>

    <label for="">Species</label>
    <?php
        if($species) {
            echo "<select name='species_id' required>";
            echo "<option value=''>Select Specie</option>";
            foreach($species as $specie) {
                echo "<option value='" . $specie['species_id'] . "'>" . $specie['species_name'] . "</option>";
            }
            echo "</select>";
        } else {
            echo 'No species found';
        }
    ?>

    <label> Price </label>
    <input type="text" name="toy_price" placeholder="Price" required>

    <label for=""> Amount </label>
    <input type="text" name="toy_amount" placeholder="Amount"
    required>

    <label for="">Toy Description</label>
    <textarea type="text" name="toy_description" placeholder="Toy Description" required></textarea>

    <input type="submit" name="submitToy" value="Submit">

</form>