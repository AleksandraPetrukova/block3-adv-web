<h2>Add a Specie</h2>
<form method="POST" action="?action=showspecies">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name" required>
    <label for="life_span">Life Span</label>
    <input type="text" name="life_span" id="life_span" placeholder="Life Span" required>
    <label for="description">Description</label>
    <textarea type="text" name="description" id="description" placeholder="Description" required>
    </textarea>
    <input type="submit" name="submit" value="Submit">
</form>