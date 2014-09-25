<?php
// This file defines functions for managing user data

/*
Return Code:
0	Success
1	Authentication Rejected
2	User existence inconsistent
3	Server Filesystem Error
*/ 

/*
User Data:
0	Email
1	Real Name
2	Class
3	Phone
4	Github
*/

require "aes.class.php";
require "aeskey.php";

$aes0 = new AES($key0);
$aes1 = new AES($key1);
$aes2 = new AES($key2);
$aes3 = new AES($key3);
$aes4 = new AES($key4);
$aes5 = new AES($key5);
$aes6 = new AES($key6);
$aes7 = new AES($key7);

function encrypt($str)
{
	global $aes0,$aes1,$aes2,$aes3,$aes4,$aes5,$aes6,$aes7,$aes8;
	$str = $aes0->encrypt($str);
	/*
	$str = $aes1->encrypt($str);
	$str = $aes2->encrypt($str);
	$str = $aes3->encrypt($str);
	$str = $aes4->encrypt($str);
	$str = $aes5->encrypt($str);
	$str = $aes6->encrypt($str);
	$str = $aes7->encrypt($str);
	*/
	return $str;
}

function decrypt($str)
{
	global $aes0,$aes1,$aes2,$aes3,$aes4,$aes5,$aes6,$aes7,$aes8;
	/*
	$str = $aes7->decrypt($str);
	$str = $aes6->decrypt($str);
	$str = $aes5->decrypt($str);
	$str = $aes4->decrypt($str);
	$str = $aes3->decrypt($str);
	$str = $aes2->decrypt($str);
	$str = $aes1->decrypt($str);
	*/
	$str = $aes0->decrypt($str);
	return $str;
}


// File Operation with encryption
function readFileAES($url)
{
	$file = file_get_contents($url);
	$file = decrypt($file);
	return explode("\n", $file);
}

function writeFileAES($url,$lines)
{
	$content = join("\n",$lines);
	$content = encrypt($content);
	file_put_contents($url, $content);
}

function getResponse($user, $id)
{
	if (userExist($user))
	{
		if ($id == 2)
		{
			$response = "";
			$file = readFileAES("data/info/$user");
			for ($i=2;$i<count($file);$i++)
			{
				$response = join("\n", array($response, $file[$i]));
			}
			return $response;
		}
		return (readFileAES("data/info/$user")[$id]);
	}
	return "NOT_FOUND";
}

function getInfo($user, $id)
{
	if (userExist($user))
	{
		return readFileAES("data/$user.dat")[$id];
	}
	return "NOT_FOUND";
}


function userExist($user)
{
	return file_exists("data/$user.usr");
}

function buildData($user,$email,$name,$class,$phone,$github)
{
	writeFileAES("data/waitlist/$user.dat",array($email,$name,$class,$phone,$github));
}

function createUser($user, $pswd, $email)
{
	if (userExist($user))
	{
		return 2;
	}
	writeFileAES("data/waitlist/$user.usr", array(sha1($pswd)));
	buildData($user,$email,"","","","");
	return 0;
}

function approveUser($user)
{
	rename("data/waitlist/$user.usr","data/$user.usr");
	rename("data/waitlist/$user.dat","data/$user.dat");
	fclose(fopen("data/info/$user","w"));
}

function rejectUser($user)
{
	unlink("data/waitlist/$user.usr");
	unlink("data/waitlist/$user.dat");
}

function authenticate($user, $pswd)
{
	if (!userExist($user))
	{
		return 2;
	}
	$hash = readFileAES("data/$user.usr")[0];
	if ((strcmp($hash, sha1($pswd))!=0))
	{
		if (strlen($pswd)!=0)
		{
			unlink("data/$user.ip");
			return 1;
		}
		// Login automatically from the same ip
		if (file_exists("data/$user.ip"))
		{
			$targetip = readFileAES("data/$user.ip")[0];
			$clientip = $_SERVER['REMOTE_ADDR'];
			if (strcmp($targetip, sha1($clientip))==0)
			{
				// Successs
				return 0;
			}
			else
			{
				// Fail, remove ip credential
				unlink("data/$user.ip");
				return 1;
			}
		}
		return 2;
	}
	// Now user input pswd correctly, write IP credential
	writeFileAES("data/$user.ip",array(sha1($_SERVER['REMOTE_ADDR'])));
	return 0;
}

?>
