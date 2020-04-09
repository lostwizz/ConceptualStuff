<?php


class MessageFlags   {

	protected $value = 0;

	protected $listOfFlags =[];

	function __construct( array $initialListOfFlags ) {
		$this->listOfFlags = $initialListOfFlags;
	}
}
//	const __default = 0b0000;
//	const display	= 0b0001;
//	const text		= 0b0010;
//	const database	= 0b0100;
//	const email		= 0b1000;
//
//	private $flagSetting = [
//					'display' => false,
//					'text' => false,
//					'database' => false,
//					'email' => false
//		];
//
//	/** -----------------------------------------------------------------------------------------------
//	 *
//	 * @return array
//	 */
//	public function listOfFlag() : array {
//		$x = [];
//		foreach( $this->flagSetting as $key => $val) {
//			$x[] = $key;
//		}
//		return $x;
//	}
//
//	/** -----------------------------------------------------------------------------------------------
//	 *
//	 * @return int
//	 */
//	function getFlagsAsInt() : int {
//		$r = 0;
//		foreach( $this->flagSetting as $key => $val) {
//			if ($val ==1){
//				$r += constant('self::' . $key);
//			}
//		}
//		return $r;
//	}
//
//	/** -----------------------------------------------------------------------------------------------
//	 *
//	 * @param type $val
//	 * @return void
//	 */
//	function setIntToFlags( int $passedValue ) : void {
//		foreach( $this->flagSetting as $key=> $val) {
//			$is_set = ((constant('self::' .$key) & $passedValue)   != 0);
//			$this->flagSetting[strtolower($key)] = $is_set;
//		}
//	}
//
//	/** -----------------------------------------------------------------------------------------------
//	 *
//	 * @param string $which
//	 * @return bool
//	 */
//	function setFlag( string $which ) : bool {
//		if (array_key_exists($which, $this->flagSetting)) {
//			$this->flagSetting[$which] =true;
//			return true;
//		} else {
//			return false;
//		}
//	}
//
//}