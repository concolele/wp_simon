<?php 
	function theme_setup(){
		register_nav_menu('top-menu','Menu chính');
		add_theme_support( 'post-thumbnails' );
	}
add_action('init','theme_setup');
?>

<?php function add_feature_group_field($taxonomy) { ?>
   <div class="form-field term-group">
       <label for="location"><?php _e('Nhập link tùy chỉnh'); ?></label>
       <input class="controls" type="text" id="linkcat" name="linkcat"/>
   </div> 
<?php }
add_action( 'category_add_form_fields', 'add_feature_group_field', 10, 1);
function save_category( $term_id, $tt_id ){
    if( isset( $_POST['linkcat'] ) && '' !== $_POST['linkcat'] ){
        add_term_meta( $term_id, 'linkcat', $_POST['linkcat'], true );
    }
}
add_action( 'created_category', 'save_category', 10, 2 );
?>

<?php
function edit_feature_group_field($taxonomy) { 
    $term_id = $taxonomy->term_id; 
    $linkcat= get_term_meta( $term_id, $key = 'linkcat', true ); 
?>
<tr class="form-field">
    <th valign="top" scope="row">
        <label for="bedroom">Link tùy chỉnh</label>
    </th>
    <td>
        <input class="controls" name="linkcat" type="text" id="linkcat" value="<?php echo $linkcat; ?>">
    </td>
</tr>
<?php }
add_action( 'category_edit_form_fields', 'edit_feature_group_field', 10, 1);
function update_category( $term_id, $tt_id ){
    if( isset( $_POST['linkcat'] ) && '' !== $_POST['linkcat'] ){
         update_term_meta( $term_id, 'linkcat', $_POST['linkcat'] );
    }
} 
add_action( 'edited_category', 'update_category', 10, 2 );
?>
