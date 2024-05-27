<form action="<?= base_url('admin/storepost') ?>" method="post">
    <?= csrf_field() ?> <!-- CSRF protection -->
    
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="10" required></textarea>
    </div>
    
    <div>
        <button type="submit">Create Post</button>
    </div>
</form>