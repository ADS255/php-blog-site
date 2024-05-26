<h1>Recent Posts</h1>
    <ul>
        <?php if (!empty($posts) && is_array($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <li>
                    <h2>
                        <a href="<?= base_url('blogpost/' . esc($post['id'])); ?>">
                            <?= esc($post['post_title']); ?>
                        </a>
                    </h2>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No posts found</li>
        <?php endif; ?>
    </ul>
