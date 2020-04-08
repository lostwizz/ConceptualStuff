<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MessageFlags   {
	const __default = 0b0000;
	const Display	= 0b0001;
	const Text		= 0b0010;
	const DB			= 0b0100;
	const Email		= 0b1000;

	private $display = 0;
	private $text =0;
	private $db =0;
	private $email =0;
	
	function getFlags() {
		return $this->display
				| $this->text
				| $this->db
				| $this->email;
	}
}