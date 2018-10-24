<?php

/**
 * Author : AVONTURE Christophe - https://www.avonture.be
 *
 * Get the list of repositories of someone and, repo by repo, check
 * if a clone is already present on disk; if not, make a clone.
 * of all repos on the disk.
 * 
 * Source: https://github.com/cavo789/github_clone_all
 */

// START Customization -------------------------------------------
// Type here the pseudo, on github, of the user
define('GIT_USERNAME', 'cavo789');
// END Customization-- -------------------------------------------

// API for getting the list of repos. "per_page=0" to get all repos
define('API', 'https://api.github.com/users/%s/repos?per_page=1');

define('DS', DIRECTORY_SEPARATOR);

echo 'Getting the list of repositories on Github of ' . GIT_USERNAME . PHP_EOL . PHP_EOL;

// Run the API, get the JSON answer and convert into an array
$api = sprintf(API, GIT_USERNAME);
$json = shell_exec('curl -s ' . $api);
$arrRepos = json_decode($json);

if (isset($arrRepos->message)) {
	// Ouch, problem.
	// The API call is perhaps no more valid or, simply, the specified user is incorrect or
	// doesn't have repositories.
	die ('Error - ' . $arrRepos->message . PHP_EOL . 'Please check ' . $api . 
		' in a browser to see the result; perhaps the user doesn\'t have any repository');
}

// Get the number of repos
$wCount = count($arrRepos);

if ($wCount > 0) {

	$i = 0;
	
	// Display a global message, number of repos found
	echo sprintf('%d repositories found, process them one by one' . PHP_EOL . PHP_EOL, $wCount);
	
	foreach ($arrRepos as $repo) {
		
		$i += 1;

		// "%'.03d" for showing a number in three positions, with leading zeros like in "001"
		$output = sprintf("   %'.03d/%'.03d - " . $repo->name, $i, $wCount);
	
		if (is_dir(__DIR__ . DS . $repo->name)) {
			echo $output . ' is already present on the disk, skip' . PHP_EOL;
		} else {
			echo $output . ' is not yet there ==> clone the repo' . PHP_EOL . PHP_EOL;
			// Not yet on the disk, start a git clone
			exec("git clone " . $repo->clone_url);
			echo PHP_EOL;
		}
	}

}
