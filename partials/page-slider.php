<h1>this is a slidersss</h1>

<?php $post_id = 178;
$post = get_page_by_title('post 2', OBJECT, 'post');;
$blocks = parse_blocks($post->post_content);
foreach ($blocks as $block) {
	echo render_block($block);
} ?>