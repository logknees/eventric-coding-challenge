## eventric-coding-challenge

This is this coding challenge for submission to Eventric.

## Instructions for use

Clone the repo locally using `git clone https://github.com/logknees/eventric-coding-challenge.git`.

Then, in the root directory of the project, type into your terminal the command `make server` to build the images if they don't yet exist, and turn on the containers.

You can also use the command `make server-build` in order to manually build the images.

Once your containers are up and running, run the `make server-setup` command to build an application key, install composer packages and create a cache file for laravel.

Finally, use `make serve` in a new terminal tab to start sending requests to the api!

Accepted requests:
`GET localhost:81/api/venues`
`GET localhost:81/api/venues{id}` 
`POST localhost:81/api/venues`
`PUT localhost:81/api/venues{id}`

Id should be between 1-50. The post request has some validation, a full new venue should look like
```
name (required)
country (required)
point_of_contact_email
point_of_contact_phone
```
and should `Accept => 'application/json'` as one of your headers, if you're using postman.

Use `make down` to turn off the containers.

Try `make test` to run automatic HTTP request tests.
