<?php require "views/components/heads.php" ?>
<?php require "views/components/navbar.php" ?>


<h1>Create a Post</h1>

<form method="POST">
    <label style="color: white;">Title:
        <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
        <?php if (isset($errors["title"])) { ?>
            <p class="invalid-data"><?= $errors["title"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <label style="color: white;">Category ID:
        <select name="category-id">
        <?php if (isset($errors["category-id"])) { ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></p>
            <?php } ?>
            <option value="1">sport</option>
            <option value="2">music</option>
            <option value="3">food</option>
        </select>
    </label>
    <button>Save</button>
</form>



<?php require "views/components/footer.php" ?>