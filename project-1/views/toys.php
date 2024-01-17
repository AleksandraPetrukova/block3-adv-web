

<h2>All Toys</h2>

<div class="linea subnav">
    <a href="?page=addtoy">Add a toy</a>
</div>
<!-- <div class="line"></div> -->

<article>
    <?php
        if($toys) {
            foreach($toys as $toy) {
                echo "<section class='card'>
                        <div class='top'>
                            <div class='id'>" . $toy['toy_id'] . "</div>
                            <div class='name'>" . $toy['toy_name'] . "</div>
                            <div class='sp-name'>" . $toy['species_name'] . "</div>
                            <div class='description'>" . $toy['toy_description'] . "</div>
                            <div class='price'>" . $toy['toy_price'] . "</div>
                            <div class='amount'>" . $toy['toy_amount'] . "</div>
                        </div>
                        <div class='buttons'>
                            <form method='POST'>
                                <input type='hidden' name='toy_id' value='" . $toy['toy_id'] . "'>
                                <div class='button-container'>
                                    <input type='submit' name='editToy' value='Edit'  class='submit-button'>
                                    <input type='submit' name='deleteToy' value='Delete' class='submit-button'>
                                </div>
                            </form>
                        </div>
                    </section>";
            }
        } else {
            echo 'No toys found';
        }
    ?>

</article>