<!-- HTML Head -->
<?php

// use Model\Pagination;

 include_once "includes/htmlhead.php" ?>
<body>  
    
    <?php 
    $pager = new \Model\Pagination("User");
    $pager->display_pager();
    $data = [2,3,5,10,100,500,1000,5000];
    $pager->display_limitRecords($data);
    $pager->filter_sort();
    $pager->display_filter();
    $users = $pager->display_table();
    ?>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th><a style="color:black;text-decoration:none;" href="?sort=name">Name</a></th>
                <th><a style="color:black;text-decoration:none;" href="?sort=age">Age</a></th>
                <th><a style="color:black;text-decoration:none;" href="?sort=email">Email</a></th>
                <th><a style="color:black;text-decoration:none;" href="?sort=term">Term</a></th>
                <th><a style="color:black;text-decoration:none;" href="?sort=date">Date</a></th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($error)) { ?>
                <?php if(!empty($users)) { ?>
                    <?php foreach ($users as $i => $user) : ?>
                        <tr data-ref="<?=$user["id"]?>">
                            <td>
                                <?php $num = 1; ?>
                                <?=$num+=$i;?>
                            </td>
                            <td><?=$user["name"]?></td>
                            <td><?=$user["age"]?></td>
                            <td><?=$user["email"]?></td>
                            <td><?=$user["term"]?></td>
                            <td><?=$user["date"]?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php } else {?>
                    <tr>
                        <?php 
                            if (isset($_SESSION["filter"])) {
                                echo "No such name {$_SESSION["filter"]} found";    
                            }
                        ?>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <?php foreach ($error as $errors) {
                    echo $errors;
                    } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- JS Link File -->
    <?php include_once "includes/jslink.php" ?>
</body>
</html>