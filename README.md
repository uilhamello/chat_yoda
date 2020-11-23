<h1>Instalation<h1>

<h3>Starting docker</h3>

<h4>Get into docker directory:</h4>
cd docker

<h4>start docker compose</h4>
docker-compose up -d

<h4>Access the page</h4>
http://localhost

Obs: if you need the project running in another port, change it on .env file inside the docker folder:

nano docker/.env
change the value of "HOST_MACHINE_UNSECURE_HOST_PORT" to one of your own.
And restart docker container:
cd docker && docker-composer restart

<h1>About the project<h1>

It is using Laravel Framework.
The code is kept in webservice folder.





