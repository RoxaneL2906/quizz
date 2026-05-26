# Quizz

Quiz interactif en ligne de commande.

## Programme
Fondamentaux - PHP CLI

## Prérequis
- Git (pour cloner le dépôt)
- Docker (pour la version conteneurisée)
- PHP (pour la version locale)

## Installation & Configuration

### En local
Cloner le projet
```bash
php quiz.php
```

### Avec Docker
```bash
docker build -t quizz .
docker run -it quizz
```

> `-i` : connecte le clavier au container (mode interactif)
> `-t` : affiche correctement le texte dans le terminal 

## Port
Aucun port exposé - application en ligne de commande.