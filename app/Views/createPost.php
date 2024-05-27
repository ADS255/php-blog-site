<div class="form-container">
    <form action="<?= base_url('admin/storepost') ?>" method="post">
        <?= csrf_field() ?> <!-- CSRF protection -->
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="10" required></textarea>
        
        <button type="submit">Create Post</button>
    </form>
</div>
