<?php 

function ceklogin()
{
	
	$ci = get_instance();
	$role_id = $ci->session->userdata('role_id');

	if(!$ci->session->userdata('email'))
	{
		redirect('auth');
	} 

}
