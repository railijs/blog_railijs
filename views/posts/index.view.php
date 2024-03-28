<?php require "views/components/heads.php" ?>
<?php require "views/components/navbar.php" ?>

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
  <li>
    <?= htmlspecialchars($post["title"])?>
    <form class="delete-form" method="POST" action="/delete"><button class="delete-button" name="id" value="<?= $post["id"] ?>" >Delete</button></form>
  </li>
<?php } ?>
</ul>

<?php require "views/components/footer.php" ?>

