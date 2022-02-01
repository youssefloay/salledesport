#Projet GIT
Compte github du prof : bendahmanem
mnbdpro@gmail.com

##Définition du projet
Nous avons choisi de faire le site d'une salle de sport
3 pages:
- Accueil
- Login
- Inscription

####Technologies:
- PHP 8.0
- Symfony
  - Twig
  - Doctrine
  - MySQL

####Répartition des tâches
Youssef & Laura : Twig
Erica et Jérémie : Doctrine

##Début du projet

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