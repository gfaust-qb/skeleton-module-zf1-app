# skeleton-module-zf1-app
Skeleton to setup zendframework 1 modules like described in [https://framework.zend.com/manual/1.12/en/project-structure.filesystem.html]().

## Suggested structure
* `configs/`
  * `application.ini`
* `controllers/`
  * `helpers/`
* `forms/`
* `layouts/`
  * `filters/`
  * `helpers/`
  * `scripts/`
* `models/`
* `services/`
* `views/`
  * `filters/`
  * `helpers/`
  * `scripts/`
* `Bootstrap.php`

## Usage

1. Create basic structure for your module with this composer-package.
2. Update Classname in `Bootstrap.php` to one according to your module's name.
   * Also have a look at [Module Bootstraps in Zend Framework Do's and Don'ts](https://mwop.net/blog/234-Module-Bootstraps-in-Zend-Framework-Dos-and-Donts.html)

## Notice

You can do this on the CLI with the Zend_Tool like described in [Using Zend_Tool On The Command Line](https://framework.zend.com/manual/1.12/en/zend.tool.usage.cli.html)
