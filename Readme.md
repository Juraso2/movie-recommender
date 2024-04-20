# Movie Recommender App

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