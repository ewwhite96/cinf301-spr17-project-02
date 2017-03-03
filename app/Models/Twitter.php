<?php
namespace App\Models;
require_once('TwitterAPIExchange.php');


private  $settings = array(
		'oauth_access_token' => "267728185-JZ5EAdUFpc751brk9MVCAWU4NaqiwPAUP5017TX3",
		'oauth_access_token_secret' => "aLnEMjHHxqTK3a70BHD4M60M7FRGrSXhyH7eVZahxuqhW",
		'consumer_key' => "psUy1RmK7tCAxFqsqBjJa8AbV",
		'consumer_secret' => "Q0OKTOTP4h4JFRLkMaOeCkUyrK5wJblT0VEhFCZM1c66xy5fjU"
		);


class Twitter 
{

	public static function blocks($screen_name)
	{

		$url = 'https://api.twitter.com/1.1/blocks/create.json';
		$requestMethod = 'POST';

		$postfields = array(
				'screen_name' => 'usernameToBlock', 
				'skip_status' => '1'
				);

		$twitter = new TwitterAPIExchange($settings);
		echo $twitter->buildOauth($url, $requestMethod)
			->setPostfields($postfields)
			->performRequest();

		$blocks = json_decode($twitter);		

		foreach($blocks as $postfield)
		{
			if($postfield['scree_name'] == $screen_name)
			{
				return $postfield;
			}
		}
		return $blocks;
	}

	public static function followers()
	{
		$url = 'https://api.twitter.com/1.1/followers/ids.json';
		$getfield = '?screen_name=J7mbo';
		$requestMethod = 'GET';

		$twitter = new TwitterAPIExchange($settings);
		echo $twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest();
	}

	public static function friends()
	{
		$url = 'https://api.twitter.com/1.1/friends/ids.json';
		$getfield = '?screen_name=J7mbo';
		$requestMethod = 'GET';


		$twitter = new TwitterAPIExhange($settings);
		echo $twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest();
	}

}
