<?php 

class Fbk {

	public static function postMessage(&$user_data, $message) {
		$facebook = IoC::resolve('facebook-sdk');
		$access_token = unserialize($user_data['token']); 
		$facebook = $facebook->setAccessToken($access_token->access_token);                
		$user_id = $facebook->getUser();      
		if($user_id) {
			// We have a user ID, so probably a logged in user.
			// If not, we'll get an exception, which we handle below.
			try {
			    $ret_obj = $facebook->api('/me/feed', 'POST',
		                                array(
		                                  'link' => 'www.myskills.com.br',
		                                  'message' => $message
		                             ));
			// echo '<pre>Post ID: ' . $ret_obj['id'] . '</pre>';
			} catch(FacebookApiException $e) {
			// If the user is logged out, you can have a 
			// user ID even though the access token is invalid.
			// In this case, we'll get an exception, so we'll
			// just ask the user to login again here.
			$login_url = $facebook->getLoginUrl( array(
			               'scope' => 'publish_stream'
			               )); 
			error_log($e->getType());
			error_log($e->getMessage());
			}   
		} else {
			// No user, so print a link for the user to login
			// To post to a user's wall, we need publish_stream permission
			// We'll use the current URL as the redirect_uri, so we don't
			// need to specify it here.
			$login_url = $facebook->getLoginUrl( array( 'scope' => 'publish_stream' ) );
			//echo 'Please <a href="' . $login_url . '">login.</a>';
		} 
	}

	public static function postNewMessage(&$user_data, $link, $picture, $description ) {
		$facebook = IoC::resolve('facebook-sdk');
		$access_token = unserialize($user_data['token']);
		$facebook = $facebook->setAccessToken($access_token->access_token);
		$user_id = $facebook->getUser();
		if($user_id) {
			// We have a user ID, so probably a logged in user.
			// If not, we'll get an exception, which we handle below.
			try {
			    $ret_obj = $facebook->api('/me/feed', 'POST',
		                                array(
											'method'	=> 'feed',
											'link' => $link,
											'picture' => $picture,
											'name'	=> 'www.MySkills.com.br',
											'caption' => 'Junte-se a nós',
											'description' => $description

		                             ));
			// echo '<pre>Post ID: ' . $ret_obj['id'] . '</pre>';
			} catch(FacebookApiException $e) {
			// If the user is logged out, you can have a
			// user ID even though the access token is invalid.
			// In this case, we'll get an exception, so we'll
			// just ask the user to login again here.
			$login_url = $facebook->getLoginUrl( array(
			               'scope' => 'publish_stream'
			               ));
			error_log($e->getType());
			error_log($e->getMessage());
			}
		} else {
			// No user, so print a link for the user to login
			// To post to a user's wall, we need publish_stream permission
			// We'll use the current URL as the redirect_uri, so we don't
			// need to specify it here.
			$login_url = $facebook->getLoginUrl( array( 'scope' => 'publish_stream' ) );
			//echo 'Please <a href="' . $login_url . '">login.</a>';
		}
	}
	public static function getMySkillsFriends() {
		try {
			$facebook = IoC::resolve('facebook-sdk');
			$user_data = Session::get('oneauth');
			$access_token = unserialize($user_data['token']);
			$facebook = $facebook->setAccessToken($access_token->access_token);
			$ret = $facebook->api( array(
	                         'method' => 'fql.query',
	                         'query' => 'SELECT
											    uid
											FROM
											    user
											WHERE
											    is_app_user
											    AND
											    uid IN (SELECT uid2 FROM friend WHERE uid1 = me())'));
			return $ret;
		} catch(FacebookApiException $e) {
			return null;
		}
	}
}