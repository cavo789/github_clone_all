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

40 repositories found, process them one by one

   001/040 - dotfiles is already present on the disk, skip
   002/040 - JD18FR-Initiation-GIT is already present on the disk, skip
   003/040 - joomla_free is already present on the disk, skip
   004/040 - joomla_mod_agency is not yet there ==> clone the repo

Cloning into 'joomla_mod_agency'...
remote: Enumerating objects: 79, done.
remote: Total 79 (delta 0), reused 0 (delta 0), pack-reused 79
Unpacking objects: 100% (79/79), done.
Checking connectivity... done.
   005/040 - joomla_rd_subs is not yet there ==> clone the repo
```

## License

[MIT](LICENSE)
