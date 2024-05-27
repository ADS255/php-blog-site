<?php if (empty($posts)): ?>
    <p>No posts found.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= esc($post['post_title']) ?></td>
                    <td>
                        <form action="<?= base_url('admin/deletepost/' . $post['id']) ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            <?= csrf_field() ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>