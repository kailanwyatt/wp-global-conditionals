<?php

class WPGC_Buddypress_Test extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'WPGC_Buddypress') );
	}

	function test_class_access() {
		$this->assertTrue( wp_global_conditionals()->buddypress instanceof WPGC_Buddypress );
	}
}
