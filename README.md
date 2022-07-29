## eventric-coding-challenge

This is this coding challenge for submission to Eventric.

## Instructions for use

Clone the repo locally using `git clone https://github.com/logknees/eventric-coding-challenge.git`.

Then, in the root directory of the project, type into your terminal the command `make server` to build the images if they don't yet exist, and turn on the containers.

You can also use the command `make server-build` in order to manually build the images.

Once your containers are up and running, run the `make server-setup` command to build an application key, install composer packages and create a cache file for laravel.

Finally, use `make serve` in a new terminal tab to start entering your pet's information!

Use `make down` to turn off the containers.

Try `make test` to run automatic HTTP request tests.
