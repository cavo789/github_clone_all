![Banner](images/banner.jpg)

# github_clone_all

> Get the list of repositories of someone and, repo by repo, check if a clone is already present on disk; if not, make a clone

Like many developers, I work on several computers and when I create a new repository (on computer A), the repository should be manually cloned on the others (computers B and C).

This little script aims to connect to the GitHub API, get a list of a user's repositories and, for each repository, check if it is already present locally or not. If not, the script runs a clone git.

Once the script has finished, a copy of all repositories will be present on the computer's hard disk.

## Table of Contents

- [Install](#install)
- [Usage](#usage)
- [Output](#output)
- [License](#license)

## Install

1. Grab a copy of the `github_clone_all.php` file and, if you're under Windows, you can also get the optional `github_clone_all.bat`.
2. Save the file(s) on your computer in the root folder of all yours repositories (f.i. `C:\Christophe\Repositories`)
3. Edit the `github_clone_all.php` file and change the following line and specify your own github username

```php
define('GIT_USERNAME', 'cavo789');
```

## Usage

1. Open a DOS prompt and go to the folder where you've saved the script.
2. Run the script i.e. start the `github_clone_all.bat` batch or run `php github_clone_all.php`

## Output

Here is an example of the output.

When a repo isn't yet on the disk, the script will clone it.

```
Getting the list of repositories on Github of cavo789

41 repositories found, process them one by one

   001/041 - dotfiles is already present on the disk, skip
   002/041 - github_clone_all is already present on the disk, skip
   003/041 - JD18FR-Initiation-GIT is not yet there ==> clone the repo

Cloning into 'JD18FR-Initiation-GIT'...
remote: Enumerating objects: 8, done.
remote: Total 8 (delta 0), reused 0 (delta 0), pack-reused 8
Unpacking objects: 100% (8/8), done.
Checking connectivity... done.

   004/041 - joomla_free is already present on the disk, skip
   005/041 - joomla_mod_agency is already present on the disk, skip
   006/041 - joomla_rd_subs is already present on the disk, skip
   007/041 - jsonlint is already present on the disk, skip
   008/041 - laravel_tips is already present on the disk, skip
   009/041 - laravel_todos is already present on the disk, skip
   010/041 - marknotes is already present on the disk, skip
   011/041 - marknotes_convert is already present on the disk, skip
   012/041 - marknotes_csv2md is already present on the disk, skip
   013/041 - marknotes_install is already present on the disk, skip
   ...
   039/041 - vbs_sql_sp_columns is already present on the disk, skip
   040/041 - vbs_utilities is already present on the disk, skip
   041/041 - _skeleton is already present on the disk, skip
```

## License

[MIT](LICENSE)
