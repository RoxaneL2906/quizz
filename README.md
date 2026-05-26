# Quizz
Fondamentaux - PHP CLI
Quiz interactif en ligne de commande

## Lancer avec Docker
```bash
docker build -t quizz-app .
docker run -it quizz-app
```

### Sauvegarder l'historique des scores
```bash
touch historique.txt
docker run -it -v $(pwd)/historique.txt:/app/historique.txt quizz-app
```