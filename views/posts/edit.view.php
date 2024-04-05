<?php require "views/components/heads.php" ?>
<?php require "views/components/navbar.php" ?>


<h1>Edit <?= htmlspecialchars($post["title"]) ?></h1>

<form method="POST">
    <input name="id" value=" <?= $post["id"] ?>" type="hidden" />
    <label style="color: white;">Title:
        <input name="title" value="<?= $post["title"] ?? "" ?>"/>
        <?php if (isset($errors["title"])) { ?>
            <p class="invalid-data"><?= $errors["title"] ?></p>
            <?php } ?>
    </label>

    <br/>

    <label style="color: white;">Category ID:
        <select name="category-id">
            <option value="1" <?= $post["category_id"] == 1 ? "selected" : "" ?> >sport</option>
            <option value="2" <?= $post["category_id"] == 2 ? "selected" : "" ?> >music</option>
            <option value="3" <?= $post["category_id"] == 3 ? "selected" : "" ?> >food</option>
        </select>
        <?php if (isset($errors["category-id"])) { ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></p>
            <?php } ?>
    </label>
    <button>Save</button>
</form>





<?php require "views/components/footer.php" ?>