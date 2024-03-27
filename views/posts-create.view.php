<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>


<h1>Create a Post</h1>

<form method="POST">
    <label style="color: white;">Title:
        <input name="matiss" value="<?= $_POST["title"] ?? "" ?>"/>
        <?php if (isset($errors["matiss"])) { ?>
            <p class="invalid-data"><?= $errors["matiss"] ?></p>
            <?php } ?>
    </label>
    <br/>
    <label style="color: white;">Category ID:
        <select name="category-id">
        <?php if (isset($errors["category-id"])) { ?>
            <p class="invalid-data"><?= $errors["category-id"] ?></p>
            <?php } ?>
            <option value="1">sport</option>
            <option value="2">food</option>
            <option value="3">music</option>
        </select>
    </label>
    <button>Save</button>
</form>



<?php require "components/footer.php" ?>