<!DOCTYPE html>
<html>
	<head>
		<title>Member Administration</title>
		<style type="text/css">
		body
		{
			font-family: "Menlo", "Courier New", monospace;
		}
		.approve
		{
			display: block;
			background-color: #66ccff;
			margin: 5px;
			text-decoration: none;
		}
		.approve:hover
		{
			background-color: #33b5e5;
		}
		.approve:active
		{
			background-color: #030382;
		}
		</style>
	</head>
	<body>
		<table width = "100%" border = "1">
			<tr>
				<th>username</th>
				<th>email</th>
				<th>approve</th>
				<th>reject</th>
			</tr>
		<?php
		function isUser($file)
		{
			$suffix = substr($file, -4, 4);
			if (strcmp($suffix, ".usr")==0)
			{
				return true;
			} else
			{
				return false;
			}
		}
		require "usermgr.php";
		if(strcmp($_REQUEST["auth"],"nflsappsNo1")==0)
		{
			if (strcmp($_REQUEST["action"],"approve")==0)
			{
				approveUser($_REQUEST["name"]);
			}
			if (strcmp($_REQUEST["action"],"reject")==0)
			{
				rejectUser($_REQUEST["name"]);
			}
			$files = scandir("data/waitlist/");
			foreach ($files as $file) {
				if (isUser($file))
				{
					$user = substr($file, 0, -4);
					$email = readFileAES("data/waitlist/$user.dat")[0];
					echo "<tr><td>$user</td><td>$email</td>";
					echo "<td><a href='memadmin.php?auth=nflsappsNo1&action=approve&name=$user' class = 'approve'>Approve</a></td>";
					echo "<td><a href='memadmin.php?auth=nflsappsNo1&action=reject&name=$user'>Reject</a></td>";
					echo "</td></tr>\n";
				}
			}
		} else
		{
			echo "<tr><td colspan='3'>ERROR: You do not have permission to operate this module</td>";
		}
		?>
	</body>
</html>