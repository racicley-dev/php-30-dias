<?php include_once('templates/header.php'); ?>

<div class="container">
    <?php include_once('templates/backbtn.html'); ?>
    <h1 id="main-title">
        Edit contact
    </h1>
    <form id="edit-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <div class="form-group">
            <label for="name">Contact name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Insert a name" value="<?= $contact['name'] ?>" required>
        </div>

        <div class="form-group">
            <label for="phone">Contact phone:</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Insert a phone" value="<?= $contact['phone'] ?>" required>
        </div>

        <div class="form-group">
            <label for="observations">Contact observations:</label>
            <textarea type="text" class="form-control" name="observations" id="observations" placeholder="Observations" rows="3"><?= $contact['observations'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php include_once('templates/footer.php'); ?>