<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class aMessage {
	public const UNKNOWN = -1;
	public const NONE = 0;
	public const ALL = 1;

	public static $levels = [ self::UNKNOWN => 'Unknown',
							 self::NONE => 'None',
							 self::ALL => 'All',
							];

	protected $text; // the messageText message
	protected $timeStamp;  // time stamp for the message (for displaying the time)
	protected $level; // level of the message (see defines at top)
	protected $codeDetails;   //  usually something like: filename(line num)function/method name
	protected $outputTypeFlags = 0;

	function __construct(){
		$this->text ='';
		$this->timeStamp = date('g:i:s');
		$this->level = 0;
		$this->codeDetails = null;
		$this->outputTypeFlags =0;
	}

	/** -----------------------------------------------------------------------------------------------
	 *
	 * @return array
	 */
	public function get() : array {
		return [ 'text' =>$this->text,
				 'timeStamp' => $this->timeStamp,
				 'level' => $this->level,
				 'codeDetails' => $this->codeDetails,
				 'outputTypeFlags' => $this->outputTypeFlags
			];
	}

	/** -----------------------------------------------------------------------------------------------
	 *
	 * @param string $which
	 * @param type $value
	 * @return void
	 */
	public function setValue( string $which, $value) : void{
		switch ($which) {
			case 'text':
				$this->text = $value;
				break;
			case 'timeStamp':
				$this->timeStamp = $value;
				break;
			case 'level':
				if (in_array($value, self::levels)){
					$this->level = $value;
				}
				break;
			case 'codeDetails':
				$this->codeDetails = $value;
				break;
			case 'outputTypeFlags':
				if (is_integer($this->outputTypeFlags)){
					$this->outputTypeFlags = $value;
				}
				break;
		}

	}

	/** -----------------------------------------------------------------------------------------------
	 *
	 * @param array $ar
	 * @return void
	 */
	public function set( array $ar) :void {
		foreach( $ar as $key => $val){
			$this->setValue($key, $val);
		}
	}

	public function getPrettyLine(string $style) : string {
		$r ='';
		$r .= '<div class="' . $style . '">';
		$r .= $this->getPrettyTimeStamp();
		$r .= ' ';
		$r .= $this->getPrettyLevel();
		$r .= ' ';
		$r .= $this->getPrettyText();
		$r .= ' ';
		$r .= $this->getPrettyCodeDetails();
		$r .= ' ';
		$r .= $this->getPrettyOutputFlags();
		$r .= '</div>';
		return $r;
	}
	public function getPrettyTimeStamp() : string{
	if (defined("IS_PHPUNIT_TESTING")) {
			$this->timeStamp = '23:55:30';
			if (empty($timeStamp)) {
				$this->timeStamp = '23:55:30';
			} else {
				$this->timeStamp = $timeStamp;
			}
		} else {
			if (empty($timeStamp)) {
				$this->timeStamp = date('g:i:s'); // current timestamp
			} else {
				$this->timeStamp = $timeStamp;
			}
		}
	}
	public function getPrettyLevel() : string{
		return self::$levels[$this->level];
	}
	public function getPrettyText() : string {
		return $this->text;
	}
	public function getPrettyCodeDetails() : string {
		if (empty($this->codeDetails)) {
			return '';
		} else {
			$r =  ' - &nbsp;  ';
			$r .= $his->codeDetails;
			return $r;
		}
	}

	public function getPrettyOutputFlags() : string {

	}
}