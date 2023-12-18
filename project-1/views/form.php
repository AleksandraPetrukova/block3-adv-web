<form method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ""; ?>">
    <label for="life_span">Life Span</label>
    <input type="text" name="life_span" id="life_span" placeholder="Life Span">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" placeholder="Description">
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>