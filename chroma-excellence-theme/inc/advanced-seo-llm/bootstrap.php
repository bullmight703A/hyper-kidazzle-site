				e.preventDefault();
				if ($(this).closest('.chroma-repeater-items').find('.chroma-repeater-item').length > 1) {
					$(this).closest('.chroma-repeater-item').remove();
				} else {
					$(this).closest('.chroma-repeater-item').find('input, textarea').val('');
				}
			});
		});
	</script>
	<?php
}

add_action('admin_enqueue_scripts', 'chroma_advanced_seo_admin_assets');