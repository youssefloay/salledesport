# Projet GIT
Compte github du prof : bendahmanem
mnbdpro@gmail.com

## Définition du projet
Nous avons choisi de faire le site d'une salle de sport
3 pages:
- Accueil
- Login
- Inscription

#### Technologies:
- Git CLI
- Vim (nan c'est une blague, vive IntelliJ 🥳)
- PHP 8.0
- Symfony
  - Twig
  - Doctrine
  - MySQL

#### Répartition des tâches
Youssef & Laura : Twig
Erica et Jérémie : Doctrine

### Installation du projet

La branche main est la branche de production. 
Faites un `composer install`

Dans le .env, modifiez la ligne en remplaçant les valeurs par celles de votre config.
````
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:8889/db_name?serverVersion=5.7"
````

Créez la migration : 
````
php bin/console make:migration
````

Lancez le serveur:
````
symfony server:start
````

Si vous obtenez une erreur, installez symfony CLI :
````
brew install symfony-cli/tap/symfony-cli
````

## Récap

On crée le projet avec symfony :
`symfony new salle --webapp`

On initialise le dépot `git init`, puis on renomme la branche master en main `git branch -M main`.

On ajoute le README que l'on a créé avec `git add .`
On commit:

````git commit -m "first commit"````

On lie le dépot remote avec le local : 

`git remote add origin git@github.com:jeremiemazard/salledesport.git`

Puis on pousse notre dépot local vers le dépot distant.

`git push origin main`

Comme nous avons modifié ce readme, on a voulu le commit avec `git add .`, sauf qu'il nous a stagé des fichiers .idea:

````
jeremiemazard@jeremie salle % git status
On branch main
Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        new file:   .idea/.gitignore
        new file:   .idea/modules.xml
        new file:   .idea/php.xml
        new file:   .idea/salle.iml
        new file:   .idea/vcs.xml
        modified:   README.md
````
On unstage donc avec : 
`git restore --stage .`

On les ajoute au .gitignore
`/.idea/*`

Pour écrire cette ligne dans le README.md, on a créé une nouvelle branche et switché dessus avec `git checkout -b dev`
On commit les modifications, puis on fait : `git merge dev`

### Organisation

Nous avons décidé de suivre le workflow de gitflow, avec notamment une branche dev qui est le tronçon principal depuis lequel nous développeront des branches "feature/*".
La branche de production sera la branche "main". Nous aurions également pu prévoir une branche "releases" à la place.

La gestion de projet s'effectue via les outils natifs à GitHub : issues et projects. 

Les issues nous ont permis d'assigner à certains devs des tâches et de suivre l'évolution de ces problèmes. 
![Gestion des issues](public/assets/images/issues.png)