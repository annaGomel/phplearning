<?php

class Brizy_Admin_View {
	public static function render( $view, array $args = array() ) {
		return Brizy_Editor_View::get(
			implode( DIRECTORY_SEPARATOR, array( dirname( __FILE__ ), 'views', $view ) ),
			$args
		);
	}

}