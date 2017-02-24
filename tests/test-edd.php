<?php

class WPGC_Edd_Test extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'WPGC_Edd') );
	}

	function test_class_access() {
		$this->assertTrue( wp_global_conditionals()->edd instanceof WPGC_Edd );
	}
}
