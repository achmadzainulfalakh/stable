<?php $page= $this->posts_model->get_post_by(array('id'=>decode_url($ID))) ?>

<!--=====================
          Dinamis Page
======================-->
<textarea id="content" >
<?php echo $page->post_content ?>
</textarea>

	<script>
		// The inline editor should be enabled on an element with "contenteditable" attribute set to "true".
		// Otherwise CKEditor will start in read-only mode.
		var introduction = document.getElementById( 'content' );
		introduction.setAttribute( 'contenteditable', true );

		CKEDITOR.inline( 'content', {
			// Allow some non-standard markup that we used in the introduction.
			extraAllowedContent: 'a(documentation);abbr[title];code',
			removePlugins: 'stylescombo',
			extraPlugins: 'sourcedialog',
			// Show toolbar on startup (optional).
			startupFocus: true
		} );
	</script>

 