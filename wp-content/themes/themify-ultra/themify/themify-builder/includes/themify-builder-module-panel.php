<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Builder Frontend Panel HTML
 */
?>

<div class="themify_builder themify_builder_front_panel">	
	<div id="themify_builder_module_panel" class="themify_builder_module_panel clearfix">
		
		<a class="slide_builder_module_panel" href="#"><?php _e('Slide', 'themify') ?></a>
		
		<div class="slide_builder_module_panel_wrapper">
			<div class="slide_builder_module_wrapper">
			<?php foreach( Themify_Builder_Model::$modules as $module ): ?>
			<?php $class = "themify_builder_module module-type-{$module->slug}"; ?>

			<div class="<?php echo esc_attr($class); ?>" data-module-name="<?php echo esc_attr( $module->slug ); ?>">
				<strong class="module_name"><?php echo esc_html( $module->name ); ?></strong>
				<a href="#" title="<?php _e('Add module', 'themify') ?>" class="add_module" data-module-name="<?php echo esc_attr( $module->slug ); ?>"><?php _e('Add', 'themify') ?></a>
			</div>
			<!-- /module -->
			<?php endforeach; ?>
			</div>
			<!-- /slide_builder_module_wrapper -->

			<div class="builder_save_front_panel">
				<ul class="themify_builder_icon_bar_nav">
                                        <li class="themify_builder_icon_bar_nav_item themify_builder_responsive_switcher_item">
                                                <ul class="themify_builder_popup_menu_wrapper<?php echo !Themify_Builder_Model::is_premium()?' themify_builder_lite':''?>">
                                                        <li><a href="#" class="js--themify_builder_breakpoint_switcher breakpoint-mobile" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Mobile', 'themify' ); ?>"><span class="ti-mobile"></span></a></li>
                                                        <li><a href="#" class="js--themify_builder_breakpoint_switcher breakpoint-tablet" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Tablet Portrait', 'themify' );?>"><span class="ti-tablet"></span></a></li>
                                                        <li><a href="#" class="js--themify_builder_breakpoint_switcher breakpoint-tablet-landscape" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Tablet Landscape', 'themify' );?>"><span class="ti-tablet ti-tablet-landscape"></span></a></li>
                                                        <li class="selected"><a href="#" class="js--themify_builder_breakpoint_switcher breakpoint-desktop" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Desktop', 'themify' );?>"><span class="ti-desktop"></span></a></li>
                                                </ul>
                                        </li>
                                        <li class="themify_builder_icon_bar_nav_item separator"></li>
					<li class="themify_builder_icon_bar_nav_item themify_builder_undo_tools">
						<a class="themify-builder-undo-btn js-themify-builder-undo-btn" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Undo', 'themify' );?>"><i class="ti-back-left"></i></a>
					</li>
					<li class="themify_builder_icon_bar_nav_item themify_builder_undo_tools">
						<a class="themify-builder-redo-btn js-themify-builder-redo-btn" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Redo', 'themify' );?>"><i class="ti-back-right"></i></a>
					</li>
					<li class="themify_builder_icon_bar_nav_item separator"></li>
					<li class="themify_builder_icon_bar_nav_item">
						<a href="#" class="themify-builder-front-close" rel="themify-tooltip-top" data-title="<?php esc_html_e( 'Close', 'themify' );?>"></a>
					</li>
				</ul>

				<div class="themify-builder-front-save">
					<span class="themify-builder-front-save-title"><?php esc_html_e('Save', 'themify') ?></span>
                                    
                                        <div class="themify-builder-revision-dropdown-panel<?php echo !Themify_Builder_Model::is_premium()?' themify_builder_lite':''?>">
                                                <span class="ti-angle-down"></span>
                                                <ul>
                                                        <li><a href="#" class="js-themify-builder-save-revision"><?php esc_html_e( 'Save as Revision', 'themify' ); ?></a></li>
                                                        <li><a href="#" class="js-themify-builder-load-revision"><?php esc_html_e( 'Load Revision', 'themify' ); ?></a></li>
                                                </ul>
                                        </div>
				</div>
			</div>
		</div>

	</div>
	<!-- /themify_builder_module_panel -->
</div>