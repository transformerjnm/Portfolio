<!-- 
Creator: Jacob Mitchell
Date of creation: 11/26/2018
name: update.php
Purpouse: Easily update commonly updated data and have an easy to use alert system. .
-->
<?php
	//Global Values**********************************************************************
		//Put the vaule of the varible inside the "". VaribleName ="value";
    //this will update all last updates values on all pages. Use Format Mounth day, year. November 23, 2018.
		$lastupdate = "November 23, 2018";
	
    //if $alert =""; then the alret will not show. if it has content(including spaces) then it will show on all pages.
    //keep the alert shorter than 35 characters with spaces.
		$alert ="";

	// Next Race information on index.html ******************************************************
		//formated **/**/**
		$racedate ="12/12/12";
		//formated **:**am/pm
		$racetime ="6:30pm";
		//formated $**
		$raceprice ="$20";
		//for information such as parents meet after race. if $racenotes=""; it will not show.
		$racenotes ="";
	
	//Track Condition on index.html *******************************************
		//open or closed
		$status ="open";
		//description of current track condition.
		$trackdescription ="The track has been draining well and drying out quickly so we are able to use the track soon after the rain.";
?>
