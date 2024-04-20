# Movie Recommender App - EN
Simple PHP application for movie recommendations. The application includes 3 recommendation algorithms:

1. Returns 3 random titles.
2. Returns all movies starting with the letter 'W', but only if they have an even number of characters in the title.
3. Returns all titles consisting of more than 1 word.

## Installation
1. Clone the repository to your device:
```bash
git clone https://github.com/Juraso2/movie-recommender
```

2. Navigate to the project directory:
```bash
cd movie-recommender
```

3. Install Composer dependencies if you don't have them:
```bash
composer install
```

## Using the `php bin/console` Command
The application provides the following commands that can be executed via the console:

### app:multi-words
The `app:multi-words` command is used to retrieve movies consisting of more than one word.

```bash
php bin/console app:multi-words
```

### app:random
The `app:random` command returns random movies.

```bash
php bin/console app:random
```

### app:starting-with-w
The `app:starting-with-w` command returns movies whose title starts with the letter "W" and has an even number of characters.

```bash
php bin/console app:starting-with-w
```

When executing the commands, the application will display the respective movies in the console.

## Running Tests
Run unit tests to verify the correctness of the application:

```bash
vendor/bin/phpunit tests
```

# Movie Recommender App - PL
Prosta aplikacja w PHP do wyszukiwania rekomendacji filmów. Aplikacja zawiera 3 algorytmy rekomendacji:

1. Zwracane są 3 losowe tytuły.
2. Zwracane są wszystkie filmy na literę 'W', ale tylko jeśli mają parzystą liczbę znaków w tytule.
3. Zwracane są wszystkie tytuły, które składają się z więcej niż 1 słowa.

## Instalacja
1. Sklonuj repozytorium na swoje urządzenie:
```bash
git clone https://github.com/Juraso2/movie-recommender
```

2. Wejdź do katalogu projektu:
```bash
cd movie-recommender
```

3. Zainstaluj zależności Composer, jeśli ich nie masz:
```bash
composer install
```

## Wykorzystanie komendy `php bin/console`
Aplikacja udostępnia następujące komendy, które można wywołać za pomocą konsoli:

### app:multi-words
Komenda `app:multi-words` służy do pobrania filmów składających się z więcej niż jednego słowa.

```bash
php bin/console app:multi-words
```

### app:random
Komenda `app:random` zwraca losowe filmy.

```bash
php bin/console app:random
```

### app:starting-with-w
Komenda `app:starting-with-w` zwraca filmy, których tytuł zaczyna się od litery "W" i ma parzystą liczbę znaków.

```bash
php bin/console app:starting-with-w
```

Podczas wywoływania komend, aplikacja wyświetli odpowiednie filmy w konsoli.

## Wykonanie testów
Uruchom testy jednostkowe, aby sprawdzić poprawność działania aplikacji:
```bash
vendor/bin/phpunit tests
```