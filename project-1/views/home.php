

    <table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php
        if($users) {
            foreach($users as $user) {
                echo "<tr>
                        <td>" . $user['species_id'] . "</td>
                        <td>" . $user['species_name'] . "</td>
                        <td>" . $user['species_avg_lifespan'] . "</td>
                        <td>" . $user['species_description'] . "</td>
                    </tr>";
            }
        } else {
            echo 'No users found';
        }
    ?>
    </tbody>
</table>