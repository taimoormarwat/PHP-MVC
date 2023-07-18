<?php 


class _404
{
	use Controller;
	
	public function index()
	{
		http_response_code(404);
		echo "404 Page not found controller";
	}
}
