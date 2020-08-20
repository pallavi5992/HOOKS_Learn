<?php 

class Filename {
	public function functionname(){
		$this->CI = & get_instance();
		$contents = $this->CI->output->get_output();
		$contents = str_replace("CodeIgniter", "CodeIgniter 3.1.1", $contents);
		 echo $content;
		  return;
	}
}


?>