<?php
namespace App\Models;
use TwitterAPIExchange;
/*
 *The variable array settings sets the access tokens
 *
 */

$settings = array(
		'oauth_access_token' => "267728185-JZ5EAdUFpc751brk9MVCAWU4NaqiwPAUP5017TX3",
		'oauth_access_token_secret' => "aLnEMjHHxqTK3a70BHD4M60M7FRGrSXhyH7eVZahxuqhW",
		'consumer_key' => "psUy1RmK7tCAxFqsqBjJa8AbV",
		'consumer_secret' => "Q0OKTOTP4h4JFRLkMaOeCkUyrK5wJblT0VEhFCZM1c66xy5fjU"
		);
/*
 *Twitter model class that uses the TwitterAPIExchange
 *to access varoius types of twitter information
 *
 *@author ewwhite
 *
 */
class Twitter 
{
	/*
	 *Access only a signle blocked user 
 	 *
	 *@param string $screen_name
         *@return $blocks
         */
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

		foreach($blocks as $block)
		{
			if($block['scree_name'] == $screen_name)
			{
				return $block;
			}
		}
		return $blocks[0];
	}

	/*
	 *Return all followers of J7mbo
	 *
	 *@return $followers
	 */
	public static function followers()
	{
		$url = 'https://api.twitter.com/1.1/followers/ids.json';
		$getfield = '?screen_name=J7mbo';
		$requestMethod = 'GET';

		$twitter = new TwitterAPIExchange($settings);
		echo $twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest();
		$followers = json_decode($twitter);
		foreach($followers as $follower)
		{
			$follower->screen_name;

		}
		return $followers;
	}
	
	/*
	 *Return all friends of J7mbo
	 *
	 *@return $friends
	 */
	public static function friends()
	{
		$url = 'https://api.twitter.com/1.1/friends/ids.json';
		$getfield = '?screen_name=J7mbo';
		$requestMethod = 'GET';


		$twitter = new TwitterAPIExhange($settings);
		echo $twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest();

		$friends = json_decode($twitter);
		foreach($friends as $friend)
		{
			$friend->user_id;
		}

		return $friends;
	}

}
