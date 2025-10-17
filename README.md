# The aseqbase website skeleton
All the main and applicable aseqbase files and folders
## Dependencies
* <a href="http://github.com//aseqbase/aseqbase">aseqbase/aseqbase</a>
<h2>Managements</h2>
<h3>Installing</h3>

  1. Install all dependencies mentioned above
  2. Follow one of these options:
		* Open a terminal in the destination directory (for example, `D:\MyWebsite\$1\`) of the website, then install the package by:
			``` bash
			> composer create-project aseqbase/skeleton
			```
		* Prompts below to create a manageable package (update, uninstall, etc.):
			``` bash
			> composer require aseqbase/skeleton
			> cd vendor/aseqbase/skeleton
			> composer dev:install
			```
  3. Put the destination directory of your package on the appeared step (for example, `D:\MyWebsite\skeleton\`)
		``` bash
		Destination Directory [D:\MyWebsite\]: D:\MyWebsite\skeleton\
		```
  4. Follow the steps to finish the installation of sources, database, etc.
  * [optional] Create an optional file named `global.php` in the `skeleton` directory with the following script:
	  ``` php
	  <?php
		$BASE = '.aseq'; 			// (Optional) The base directory you want to inherit all properties except what you changed
		$ASEQ = 'skeleton'; 				// (Optional) The current subdomain sequence, or leave null if this file is in the root directory
		$SEQUENCES_PATCH = [];	// (Optional) An array to apply your custom changes in \_::$Sequences
									// newdirectory, newaseq; // Add new directory to the \_::$Sequences
									// directory, newaseq; // Update directory in the \_::$Sequences
									// directory, null; // Remove thw directory from the \_::$Sequences
	  ?>
	  ```
  5. Enjoy...
<h3>Using</h3>

  1. Do one of the following options:
	  	* Visit its special URL (for example, `http://skeleton.[my-domain-name].com`, or `http://[my-domain-name].com/skeleton`)
		* On the local server:
			1. Create or update file named `global.php` in the root directory with at least the following script:
	  			``` php
	  			<?php
					$BASE = 'skeleton'; // To set the base directory you want to see at the root of `localhost`
	 			 ?>
	  			```
			2. Use the following command on the root directory
				``` bash
				> composer start
		  		```
		  	3. Visit the URL `localhost:8000` on the local browser
  2. Enjoy...

<h3>Updating</h3>

  1. Keep your package updated using
		``` bash
  		> cd vendor/aseqbase/skeleton
		> composer dev:update
		```
  2. Follow the steps to finish the update of sources, database, etc.
  3. Enjoy...

<h3>Uninstalling</h3>

  1. Uninstall the package and the constructed database using
		``` bash
  		> cd vendor/aseqbase/skeleton
		> composer dev:unistall
		```
  2. Follow the steps to finish the uninstallation of sources, database, etc.
  3. Enjoy...
