# The aseqbase website skeleton
All the main and applicable aseqbase files and folders
## Dependencies
* <a href="http://github.com//aseqbase/aseqbase">aseqbase/aseqbase</a>
## Installations
1. Install all dependencies
2. Open a terminal in the home directory (public_html) of the website, then install the project by:
   ``` bash
 	> composer create-project aseqbase/skeleton my-subdomain-name
	> cd my-subdomain-name
 	> composer dev:install
   ```
3. Follow steps
4. Create an opitonal file name `global.php` on the root directory with the bellow codes:
  ``` php
  <?php
  	$ASEQ = '[my-subdomain-name]'; 	// (Optional) The current subdomain sequence or leave null if this file is in the root directory
  	$BASE = '[the-base-directory]'; // (Optional) The base directory you want to inherit all properties except what you changed
	$SEQUENCES_PATCH = []; 		// (Optional) An array to apply your custom changes in \_::$Sequences
								// newdirectory, newaseq; // Add new directory to the \_::$Sequences
								// directory, newaseq; // Update directory in the \_::$Sequences
								// directory, null; // Remove thw directory from the \_::$Sequences
  ?>
  ```
5. Use it through its special link (http://[my-domain-name].com or http://[my-subdomain-name].[my-domain-name].com)
6. Enjoy...