<?php require "components/heads.php" ?>
<?php require "components/navbar.php" ?>

<form>
 <input name='id' value='<?= ($_GET["id"] ?? "") ?>'/>
 <button>Submit ID</button>
</form>

<form>
 <input name='name' value='<?= ($_GET["name"] ?? "") ?>' />
 <button>Submit category</button>
</form>

<h1>Posts</h1>

<ul>
<?php foreach($posts as $post) { ?>
  <li> <?= htmlspecialchars($post["title"])?> </li>
<?php } ?>
</ul>

<?php require "components/footer.php" ?>

