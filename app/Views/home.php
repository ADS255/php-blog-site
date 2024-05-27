<div class="homepage-container">
    <h1>Recent Posts</h1>
    <ul class="post-list">
        <?php if (!empty($posts) && is_array($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <li class="post-card">
                    <a href="<?= base_url('blogpost/' . esc($post['id'])); ?>" class="post-link">
                        <h2><?= esc($post['post_title']); ?></h2>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="no-posts-msg">No posts found</li>
        <?php endif; ?>
    </ul>
</div>


