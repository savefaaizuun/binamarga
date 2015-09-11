<?php
class MY_Loader extends CI_Loader {
	public function template($template_name, $vars = array(), $return = FALSE)
	{
		$content  = $this->view('templates/header', $vars, $return);
		// bugs in php5.4
// 		echo empty($this->uri->segment(1)) ? 'home': $this->uri->segment(1) ;exit;
	
		
// 		$content .= $this->view('templates/breadcrump', $vars, $return);
		$content .= $this->view($template_name, $vars, $return);
		$content .= $this->view('templates/footer', $vars, $return);

		if ($return)
		{
			return $content;
		}
	}

	public function template_superadmin($template_name, $vars = array(), $return = FALSE)
	{
		$content  = $this->view('templates_admin/header', $vars, $return);
		// bugs in php5.4
// 		echo empty($this->uri->segment(1)) ? 'home': $this->uri->segment(1) ;exit;
	
		$content  = $this->view('templates_admin/sidebar1', $vars, $return);
// 		$content .= $this->view('templates/breadcrump', $vars, $return);
		$content .= $this->view($template_name, $vars, $return);
		$content .= $this->view('templates_admin/footer', $vars, $return);

		if ($return)
		{
			return $content;
		}
	}

	public function template_admin($template_name, $vars = array(), $return = FALSE)
	{
		$content  = $this->view('templates_admin/header', $vars, $return);
		// bugs in php5.4
// 		echo empty($this->uri->segment(1)) ? 'home': $this->uri->segment(1) ;exit;
	
		$content  = $this->view('templates_admin/sidebar2', $vars, $return);
// 		$content .= $this->view('templates/breadcrump', $vars, $return);
		$content .= $this->view($template_name, $vars, $return);
		$content .= $this->view('templates_admin/footer', $vars, $return);

		if ($return)
		{
			return $content;
		}
	}
}
