<?php

    /*
     * @description: TODO!
     */
    $group_statement = $pdo->prepare("SELECT * FROM forum_groups");
    $group_statement->execute();

    while ($row = $group_statement->fetch()) {

?>
<div class="card" style="margin-bottom: 20px;">
    <div class="card-header">
        <?php

        echo ($row['name']);

        ?>
    </div>
    <div class="card-block forums-list">
        <ul class="list-group list-group-flush">
            <?php

            $forum_statememt = $pdo->prepare("SELECT * FROM forum_forums WHERE group_id = :group_id");
            $forum_statememt->bindParam("group_id", $row['id']);
            $forum_statememt->execute();

            while ($row = $forum_statememt->fetch()) {

                ?>
                <a href="?site=forum_sites/forums_index&amp;f=<?php echo($row['id']); ?>">
                    <li class="list-group-item">
                        <img class="forum-img" src=""/>
                        <?php

                        echo($row['name']);

                        ?>
                    </li>
                </a>
                <?php

            }

                ?>
        </ul>
    </div>
</div>
<?php

    }

?>