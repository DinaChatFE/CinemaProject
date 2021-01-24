<?php

include 'admin_header.php';
include 'admin_menu.php';

include './model/getCategories.php';
?>

<head>
    <link rel="stylesheet" href="../dashboard.css">
    <style>
    .data-nav li:nth-child(4) a {
        color: blue !important;
    }
    </style>
</head>

<body>
    <div class="container" style="font-family: sans-serif">
        <div class="row">
            <div class="col-6">
                <form method='POST' action="model/postCategories.php">
                    <h3 style="padding: 20px 0px 20px 0px;">Add new categories to system</h3>
                    <div class="form-group">
                        <label for="text" name='categories_name'> categories name</label>
                        <input type="text" class="form-control" id="hallname" placeholder="hall name"
                            name='categories_name'>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit_categories" value="submit">
                </form>
            </div>
            <div class="col-6 pl-3">

                <table class="table m-5">

                    <thead>
                        <h5 class="pl-5 pt-3">List hall</h5>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">categories</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $result): ?>
                        <tr>
                            <th scope="row"><?php echo $result['categories_id'] ?></th>
                            <td><?php echo $result['categories_name'] ?></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>