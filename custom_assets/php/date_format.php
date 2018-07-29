
<?php
function convertString ($date)
	{
		// convert date and time to seconds
		$sec = strtotime($date);

		// convert seconds into a specific format
		$date = date("Y-m-d", $sec);

		// append seconds to the date and time
		$date = $date;

		// print final date and time
		return $date;
	};
?>