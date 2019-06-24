

# ImageX Interview -- Assignment

## How to get up and running:

Clone this project:
* `git clone https://github.com/victorcpereira/Imagex-assignment`
* `cd Imagex-assignment`
* `make install` - build your development environment

## Local development

Once local development is installed:
* `make up` - to spin containers up
* `make down` - to spin them down

Refer to Makefile for available local development commands.

`make help` - to list all available commands.

### Run Drush commands

`make drush <command>`

OR

`docker exec imagex_php drush <command>`

See a list of most common Drush commands represented as Makefile targets below:
* `make cim` - import configuration
* `make cex` - export configuration
* `make updb` - run database updates
* `make entup` - run entity updates
* `make uli` - generate login link for user 1
* `make cr` - clear caches

### Get Local web address:

Add `127.0.0.1 local.imagex.com` to hosts file.

Go to [http://local.imagex.com](http://local.imagex.com)

