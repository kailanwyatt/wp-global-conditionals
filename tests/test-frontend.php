<?php

class WPGC_Frontend_Test extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'WPGC_Frontend') );
	}

	function test_class_access() {
		$this->assertTrue( wp_global_conditionals()->frontend instanceof WPGC_Frontend );
	}
}
