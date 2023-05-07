# fmp-fsd-geekshubs-val-laravel-final project

# Welcome to final project backend app
<p align="center"><img src="./img/headerpict.jpg"/></p> 

<details>
  <summary>Index</summary>
  <ol>
    <li><a href="#about-this-project">About this project</a></li>
    <li><a href="#deploy">Deploy</a></li>
    <li><a href="#stack">Stack</a></li>
    <li><a href="#diagram-bd">Diagram DB</a></li>
    <li><a href="#local-installation">Local installation</a></li>
    <li><a href="#how-do-we-do-it">How do we do it</a></li>
    <li><a href="#project-structure">Project structure</a></li>
    <li><a href="#data-base">Database</a></li>
    <li><a href="#endpoints">Endpoints</a></li>
    <li><a href="#known-bugs">Known bugs</a></li>
    <li><a href="#future-functionalities">Future functionalities</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#webgraphy">Webgraphy</a></li>
    <li><a href="#gratitudes">Gratitudes</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## About this project

<p align="center">GeeksHub’s product department request us to create the backend for my final project. From which the whole business’ logic is managed, in this case a videogame.
A database and a REST API will be created.
The player must be able to register in the application, login and access to their personal area. 
	Moreover, the player must be able to create characters and be able to play games with them. Where not only they will win “badges” through wins, but they will accumulate “madness” with every failure. 
There will also be a user area with your personal data, which can only be seen by himself.
	Furthermore, the administrator will have access to the administrator area from which they will be able to see the users and manage their roles and erase them. Also, they will be able to see the characters created by each user, as well as their games and erase them. </p>

## Stack
<p>Technologies that has been used:</p>
<div align="center">
    <a href="https://www.postman.com/">
        <img src= "https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white"/>
    </a>
    <a href="https://www.mysql.com/">
        <img src= "https://img.shields.io/badge/mysql-3E6E93?style=for-the-badge&logo=mysql&logoColor=white"/>
    </a>
    <a href="https://www.github.com/">
        <img src= "https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=white"/>
    </a>
    <a href="https://git-scm.com/">
        <img src= "https://img.shields.io/badge/git-F54D27?style=for-the-badge&logo=git&logoColor=white"/>
    </a>
    <a href="https://www.docker.com/">
        <img src= "https://img.shields.io/badge/docker-2496ED?style=for-the-badge&logo=docker&logoColor=white"/>
    </a>
    <a href="https://www.php.net/">
        <img src= "https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/>
    </a>
<a href="https://laravel.com">
        <img src= "https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"/>
    </a>
</div>

## Diagram DB

![FP Diagram](https://user-images.githubusercontent.com/121863208/236691456-a572fb58-8654-495c-95fa-fe03a10892fa.JPG)

## Local installation

Steps to make it work on your local computer:
1. Clone the project on your computer with git bash:
 `$git clone 'url-repository'`
2. Install all dependencies with the following command:
 ` $ compose install `
3. Create a .env file following the template .env.example provided and type all credentials. If you cannot get them, change the parameters for your own local database set up running in docker.
4.  Start the server with:
 ``` $ php artisan serve ```
5. Connect the repository with the database with the following commands:
 ``` $ php artisan migrate ``` 
 ``` $ php artisan db:seed ``` 

6. Import this file in postman to get the endpoints we have created:

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/26229497-5f774b22-765d-42df-80ac-62e2fbe7a08c?action=collection%2Ffork&collection-url=entityId%3D26229497-5f774b22-765d-42df-80ac-62e2fbe7a08c%26entityType%3Dcollection%26workspaceId%3Da4a7fa1f-bae1-41b0-8f54-556776de2238)


## How do we do it
For the app of the game we have implemented different technologies already mentioned above in "Stack" such as PHP, Laravel, MySQL, etc.
First, we design our database and all relationships, in which there were a couple of modifications to simplify it as much as possible, you can see some of the sketches used:

![WhatsApp Image 2023-05-07 at 18 59 20](https://user-images.githubusercontent.com/121863208/236691819-d09fbb57-5408-4f2d-aae1-9c944ff7f1c9.jpeg)

After this we organized ourselves in terms of requirements that we wanted to have in our app and marked all the final points of the project as seen in the following photos:

![WhatsApp Image 2023-05-07 at 18 59 19 (1)](https://user-images.githubusercontent.com/121863208/236691850-448fde57-b101-4c68-adc9-60956ad75405.jpeg)

![WhatsApp Image 2023-05-07 at 18 59 19](https://user-images.githubusercontent.com/121863208/236691853-68c1d2bb-af31-449a-97b2-75e69e9d4747.jpeg)

Create a database with PHP + Laravel has been really intuitive and thanks to their tools, some tasks have been significantly simplified. However, differences have been found in comparison with other technologies previously worked on like JavaScript, Node.js and Sequelize.
Maybe at the moment of creating some endpoints, the known grammar of JS has been missed, but needless to say, that it has not been difficult getting to know PHP in some instances and Laravel in others. 

## Project structure

We used model view controller to structure our project. We created a basic CRUD.
The project will have the following structure:

	Migrations.
From the migrations, the table structure has been defined, with all its columns and types. 
	Models.
With the models we have defined the relations between the tables and the kind of relation. 
	Controllers.
In the controllers we have created every endpoints, arranged with the same migrations and models’ structure.
	Middlewares.
In this occasion, we only have nee done middleware, which is the admin.
	Seeders.
All the seeders needed to run the application once is up and running have been created. 
	api.
From the archive api.php we have defined every route and its relation with its controllers and endpoints.
	.env
In the archive .env we have defined every variable. 


## DataBase

This project required a functional API connected to a database with different relationships.
The database has 11 models: role, user_role, user, service, appointment, employee and specialty.
Our database is based on two types of relationships.
From many to many (N:N), we have used this relation to create the relations between ”games” and “answers” and/or “stages”, also between “badges” and “games”.
The last relation that remains for us to mention is one to many (1:N), in our case it is between “users” and “roles”, given that in this occasion there was no need for a user to have more than one role. As well as between “users” and “characters” among many others. 




## Endpoints
This project has 47 endpoints.

Any user can access to:

<details>
<summary><strong>User</strong></summary>

- Register user:
    - Manage registration in our API. The information is passed via body in Postman containing the username, email and password.

            POST:   https://laravel-proof-production.up.railway.app/api/register 
        body:
        ``` bash
           {
            "userName": "Fulano",
            "email": "fulano@fulano.com",
            "password": "password"
            }
        ```
The password is encrypted thanks to the Laravel’s own library. 

- Login User: 
    - We manage the log in our API (secure so that only an administrator or user can access it).

            POST:   https://laravel-proof-production.up.railway.app/api/login
        body:
        ``` bash
        {
            "email": "fulano@fulano.com",
            "password": "password"
        }
        ```
</details>

We have organised all other endpoints by model, to see which actions we can do in relation with each one: 

<details>
<summary><strong>Users</strong></summary>

- Update Profile:
   - Update and fill the existing fields inside the user’s profile:

            PUT:   https://laravel-proof-production.up.railway.app/api/users/updateProfile
        body:
        ``` bash
        {
            "userName": "Full",
            "name": "Fulano",
            "surname": "The First",
            "email": "fulano@fulano.com",
            "birthdate": "1984-01-01"
        }
        ```
Fill the fields separately is also possible, without needing to modify or update all of them. Endpoints for this have been created, example:

            PUT:   https://laravel-proof-production.up.railway.app/api/users/profile/userName
        body:
        ``` bash
        {
            "userName": "Fulano",
        }
        ```
- Delete User: 
   - Is an endpoint which only can be used by an admin.

            DELETE:   https://laravel-proof-production.up.railway.app/api/users/:id
    You must indicate in the url the ID number of user id.


- Update user role : 
    - Modifies the user rol. The same happens with this endpoint, only can be executed by an admin.

            PUT:   https://laravel-proof-production.up.railway.app/api/users/updateRole/2

The next endpoints to obtain a users’ lists with additional information: 

- Get all users: 
    - GET a list of all users without additional information.
  
            GET:   https://laravel-proof-production.up.railway.app/api/users

- Get all users with characters: 
    - GET a list of all users with their created characters.
  
            GET:   https://laravel-proof-production.up.railway.app/api/users/withCharacters

- Get all users with characters by Id: 
    - GET a list of all users with her created characters.
  
            GET:   https://laravel-proof-production.up.railway.app/api/users/byIdwithCharacters
This endpoint obtains the information from the user id through a token.
 
- Get profile: 
    - GET petition to see the user´s own profile.
  
            GET:   https://laravel-proof-production.up.railway.app/api/users/profile
This endpoint obtains the information from the user id through a token.

</details>

<details>
<summary><strong>Roles</strong></summary>

- Create privilege: 
    - We can create a new class of privilege for the application.
  
            POST:   https://laravel-proof-production.up.railway.app/api/newRole
        body:
        ``` bash
        {
            "privilege": "Super Admin",
        }

        ```
- Get roles by Id with users: 
    - Search and obtains a list of all users with the role mentioned. 
 
            GET:   https://laravel-proof-production.up.railway.app/api/roles/{id}
</details>

<details>
<summary><strong>Characters</strong></summary>

- Get characters with users: 
    - Obtains a list of all users’ characters mentioned through a token. 

            GET:   https://laravel-proof-production.up.railway.app/api/characters
- Get character images: 
    - Obtains every image associated with the character. 
  
            GET:   https://laravel-proof-production.up.railway.app/api/characters/images
- Update character images: 
    - Updates the image associated to a character.
  
            PUT:   https://laravel-proof-production.up.railway.app/api/characters/images
body:
        ``` bash
        {
            "id": 1,
   	"image_id": 2
        }

        ```
- Delete Character: 
    - Deletes a carácter by Id. This endpoint only can be executed by an Admin.
  
            DELETE:   https://laravel-proof-production.up.railway.app/api/characters/delete/{id}

</details>

<details>
<summary><strong>Select Games</strong></summary>

- Get Select Games: 
    - Obtains every selected game.
  
            GET:   https://laravel-proof-production.up.railway.app/api/selectGames

- Get Select Games with Saved Games: 
    - Obtains every selected game with saved games in them. 
  
            GET:   https://laravel-proof-production.up.railway.app/api/selectGames/withSavedGames
</details>

<details>
<summary><strong>Games</strong></summary>
- Get Games: 
    - Obtains every saved game. 
            GET:   https://laravel-proof-production.up.railway.app/api/games

- Get Games with Select Games: 
    - Obtains every saved game with the game they belong to. 
            GET:   https://laravel-proof-production.up.railway.app/api/games/withSelectGames

- Get Games with Characters: 
    - Obtains every saved game with the character they belong to. 
            GET:   https://laravel-proof-production.up.railway.app/api/games/byCharacter/{id}

- Get Games by Id: 
	  - Obtains a saved game by the selected Id. 
            GET:   https://laravel-proof-production.up.railway.app/api/games/byId/{id}

- Get Games with Games Stages: 
    - Obtains every saved game with the stages registered in them. 
            GET:   https://laravel-proof-production.up.railway.app/api/games/withGamesStages

- Get Games with All Information: 
    - Obtains every saved game with the stage registered in them and the selected game ther belong to.
            GET:   https://laravel-proof-production.up.railway.app/api/games/withAllInfo

- Create Game: 
    - Creates a new game.
            POST:   https://laravel-proof-production.up.railway.app/api/games
        body:
        ``` bash
        {
            "character_id": 4,
            "select_game_id": 1,
            "difficulty": "easy"
        }

        ```

- Create Saved Game: 
    - Registers a saved stage in a game.
            POST:   https://laravel-proof-production.up.railway.app/api/games/save
        body:
        ``` bash
        {
            "game_id": 9,
            "stage_id": 2
        }
        ```

- Update Saved Game: 
    - Updates a saved stage in a game. It is used mainly to register the selected answer in the stage. 
            PUT:   https://laravel-proof-production.up.railway.app/api/games/update
        body:
        ``` bash
        {
            "id": 7,
            "answer_id": 1
        }
        ```

- Update Madness at Game: 
    - Updates the Madness level registered in a game. 
            PUT:   https://laravel-proof-production.up.railway.app/api/games/updateMadness
        body:
        ``` bash
        {
            "id": 1,
            "madness": 1
        }
        ```

- Update Finished state at Game: 
    - Upadtes the stage of a finished game.  
            PUT:   https://laravel-proof-production.up.railway.app/api/games/updateFinished
        body:
        ``` bash
        {
            "id": 1,
            "finished": true
        }
        ```

- Update Guide at Game: 
    - Updates the selected guide in a game.  
            PUT:   https://laravel-proof-production.up.railway.app/api/games/updateGuide
        body:
        ``` bash
        {
            "id": 1,
            "guide": "chaotic"
        }
        ```
</details>

<details>
<summary><strong>Stages</strong></summary>

- Get Stages: 
    - Obtains a list of every created stage in a game. 
            GET:   https://laravel-proof-production.up.railway.app/api/stages

- Get Stages with Answers: 
    - Obtains a list of every created stage in a game with the possible answers associated. 
            GET:   https://laravel-proof-production.up.railway.app/api/stages/withAnswers

<details>
<summary><strong>Answers</strong></summary>

- Get Answers: 
    - Obtains a list of every possible registered answer. 
            GET:   https://laravel-proof-production.up.railway.app/api/answers

- Get Answers: 
    - Obtains a list of every possible registered answer and the stage they belong to.
            GET:   https://laravel-proof-production.up.railway.app/api/answers/withStage

- Get Answers by Id: 
    - Obtains an answer by the selected Id with the information associated to the stage it belongs to and the badge associated. 
            GET:   https://laravel-proof-production.up.railway.app/api/answers/{id}

</details>

<details>
<summary><strong>Badges</strong></summary>

- Get Badges: 
    - Obtains a list of every registered badge in the game. 
            GET:   https://laravel-proof-production.up.railway.app/api/badges

- Get Badges with answers: 
    - Obtains a list of every registered badge in the game and the answer they are associated to.
            GET:   https://laravel-proof-production.up.railway.app/api/badges/withAnswers

- Get Badges by Game Id: 
    - Obtains every registered badge in a game with the information associated to the game they belong to and the badge’s details. 
            GET:   https://laravel-proof-production.up.railway.app/api/badges/ByGameId/{id}

- Add Badge to Game: 
    - Creates an entry in the intermediate table which associates a badge to a game. 
            POST:   https://laravel-proof-production.up.railway.app/api/badges/add
        body:
        ``` bash
        {
            "game_id": 1,
            "badge_id": 1
        }
        ```

- Consume badge to Game: 
  	- Updates the stage of a badge in a game to “consumed” when it it used. 
            POST:   https://laravel-proof-production.up.railway.app/api/badges/add
        body:
        ``` bash
        {
    		    "id": 1        
        }
        ```



</details>

## Known bugs
The error that we have encountered when modifying certain functions is:

  - At the moment of updating certain fields some validations do not work totally well, that needs to be improved. 


## Future functionalities

Below we mention a few functionalities that remain to be implemented in this project:

  - New games will be introduced (select_games)
  - Also, we aim to implement pagers to show the results of certain searches. 
  -	Endpoints will be created to extract statistics. The app is design to have a register of everything and be able to extract those statistics.     

## Licence
This project is belonging to license Creative Commons Legal Code.


## Webgraphy
To achieve the goal we have collected information from:
-	[PHP Documentation](https://www.php.net/manual/es/intro-whatis.php)
-	[Laravel Documentation](https://laravel.com/docs/10.x)


## Gratitude
I thank my colleagues and especially to:

- **Dani**  
<a href="https://www.github.com/datata" target="_blank"><img src="https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=green" target="_blank"></a> 

- **David**  
<a href="https://github.com/Dave86dev" target="_blank"><img src="https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=red" target="_blank"></a>

- **Jose**
<a href="https://github.com/JoseMarin" target="_blank"><img src="https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=white" target="_blank"></a> 

- **Mara**
<a href="https://www.github.com/MaraScampini" target="_blank"><img src="https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=green" target="_blank"></a> 


## Contact
- Fernando Martínez Pardo
<a href = "sierpe515@gmail.com"><img src="https://img.shields.io/badge/Gmail-C6362C?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a><a href="https://www.linkedin.com/in/fernando-mart%C3%ADnez-pardo-61456712a/" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a><a href="https://github.com/Sierpe515" target="_blank"><img src="https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=red" target="_blank"></a> 
