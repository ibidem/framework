Move this folder (ie. private) and all of it's contents outside the project.

[!!] do not just move the config directory in this folder; bear in mind there
may be more types of configuration files then just php ones; config is there to
simply indicate the standard ones, you may potentially have ones in the form
of files with proprietary certificate binary format

This folder contains only security related configuration files and values. On 
some application the system will automatically enter a fail state if not 
configured. A `null` value on keys for example is generally not acceptable.

The folder should be placed somewhere outside you public directory. The folder
should also be outside your project files so that it can be reused by multiple
instances; which typically means that if you need to scrap the project files
at any point you don't need to reconfigure the keys or risk losing the keys.

The folder needs to be linked from your `config.php` (via the `key.path` key).
