<table class="table" style="background-color: #007BFF;">
    <thead>
        <tr>
            <th scope="col" class="text-center" style="width:20%">ID</th>
            <th scope="col" class="text-center" style="width:40%">Name</th>
            <th scope="col" class="text-center" style="width:20%">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // connect to database:
        require_once './config/connect.php';
        require_once './functions/functions.php';

        $employees = (mysqli_query($connect, "SELECT * FROM darbuotojai.employees"));
        $employees = mysqli_fetch_all($employees);
        //printink($employees);
        foreach ($employees as $employee) {
        ?>
            <!-- atjungiu php koda -->
            <tr>
                <td scope="row" class="text-center" style="width:20%"><?= $employee[0] ?></td>
                <td class="text-center" style="width:40%"><?= $employee[1] ?></td>
                <td class="text-center" style="width:20%"><a href="update.php?id=" type="button" style="background-color: white;">UPDATE</a></td>
            </tr>
        <?php // vel prijungiu php koda
        }
        ?>
    </tbody>
</table>

<div class="container center_div">
    <h4>Add new employee</h4>
    <form action="./functions/create.php" method="post">
        <input class="center" type="text" name="name" placeholder="Name">
        <button type="submit">Add</button>
    </form>
</div>