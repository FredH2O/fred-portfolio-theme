<div class="learning-comments">
    <h2>Comments Section</h2>
    <h3>Test test test in comments.php</h3>

    <?php if (have_comments()) : ?>
        <ol class="comment-list">
            <?php wp_list_comments(); ?>
        </ol>
    <?php else : ?>
        <p>No comments yet. Be the first to leave one.</p>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>