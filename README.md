# Skeleton (Project)
> aseqbase/skeleton

All the main and applicable aseqbase files and folders, to have a complete but blank aseqbase project...

## Dependencies
* <a href="http://github.com//aseqbase/aseqbase">aseqbase/aseqbase</a>
<h2>Managements</h2>
<h3>Installing</h3>

  1. Install all dependencies mentioned before
  2. Follow one of these options:
		* Open a terminal in the destination directory (for example, `D:\MyWebsite\skeleton\`) of the website, then install the project by:
			``` bash
			> composer create-project aseqbase/skeleton
			```
		* Prompts below to create a manageable project (update, uninstall, etc.):
			``` bash
			> composer require aseqbase/skeleton
			> cd vendor/aseqbase/skeleton
			vendor/aseqbase/skeleton> composer dev:install
			```
  3. Put the destination directory of your project on the appeared step (for example, `D:\MyWebsite\skeleton\`)
		``` bash
		Destination Directory [D:\MyWebsite\]: D:\MyWebsite\skeleton\
		```
  4. Follow the steps to finish the installation of sources, database, etc.
  5. [optional] On the local server, create an optional file named `global.php` in the `skeleton` directory  to change your-parent-directory-name (from the `.aseq`) using:
		``` bash
		> composer skeleton:create global --aseq "skeleton" --base "your-parent-directory-name" -f
		```
		or
		``` bash
		> cd vendor/aseqbase/skeleton
		vendor/aseqbase/skeleton> composer dev:create global --aseq "skeleton" --base "your-parent-directory-name" -f
		```
		**Note**: Do not forget to replace "your-parent-directory-name" with your item (default `.aseq`). 
  6. Enjoy...

<h3>Using</h3>

  1. Do one of the following options:
	  	* Visit its special URL (for example, `http://skeleton.[my-domain-name].com`, or `http://[my-domain-name].com/skeleton`)
		* On the local server:
			1. Use the following command on the root directory
				``` bash
				> composer start
		  		```
		  	2. Visit the URL `localhost:8000` (for default) on the local browser
  2. Enjoy...

<h3>Updating</h3>

  1. Keep your project updated using
		``` bash
		> composer skeleton:update
		```
		or
		``` bash
  		> cd vendor/aseqbase/skeleton
		vendor/aseqbase/skeleton> composer dev:update
		```
  2. Follow the steps to finish the update of sources, database, etc.
  3. Enjoy...

<h3>Uninstalling</h3>

  1. Uninstall the project and the constructed database using:
		``` bash
		> composer skeleton:unistall
		```
		or
		``` bash
  		> cd vendor/aseqbase/skeleton
		vendor/aseqbase/skeleton> composer dev:unistall
		```
  2. Follow the steps to finish the uninstallation of sources, database, etc.
  3. Enjoy...

<h4>Creating</h4>

  1. Create a new file by a predefined template name (for example, global, config, back, router, front, user, info, etc.) using:
		``` bash
		> composer skeleton:create [predefined-template-name]
		```
		or
		``` bash
  		> cd vendor/aseqbase/skeleton
		vendor/aseqbase/skeleton> composer dev:create [predefined-template-name]
		```
  2. Follow the steps to finish creating the file.
  3. Enjoy...
