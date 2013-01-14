<?php
// Extend URL helper with some convenience functions

// url_to() - create URL for a specific route
//	url_to('user/list')  => "http://site.dev/user/list"
function url_to($route)
{
	$url = base_url() . $route;
	return $url;
}

// Redirect to a given route
function redirect_to($route)
{
	redirect(url_to($route));
}

/* EOF */
