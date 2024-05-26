<h1>Recent Posts</h1>
    <ul>
        <?php if (!empty($posts) && is_array($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <li>
                    <h2><?= esc($post['post_title']); ?></h2>
                    <p><?= esc($post['post_content']); ?></p>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No posts found</li>
        <?php endif; ?>
    </ul>
