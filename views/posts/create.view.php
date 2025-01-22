<?php $title = "Create";?>
<?php $style = "css/create.css";?>
<?php require "views/components/header.php";?>
<?php require "views/components/navbar.php";?>
<h1>Izveidot bloga ierakstu!</h1>

<form method="POST">
    <input name="content" placeholder="Whats up?" id="content" value="<?= $_POST['content'] ?? ""?>"/>
    <button>
    <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-browser-share"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8h16" /><path d="M12.5 20h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7" /><path d="M8 4v4" /><path d="M16 22l5 -5" /><path d="M21 21.5v-4.5h-4.5" /></svg>
    </button>
</form>
<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
    <?php } ?>
<?php require "views/components/footer.php";?>
    