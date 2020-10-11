# Laravel Auth

Esercitazione sugli strumenti base che laravel mette a disposizione per creare registrazione utenti, login e logout.

Con laravel 7 da terminale utilizzare i comandi (in laravel 8 questo passaggio è diverso fare riferimento alla documentazione):

    composer require laravel/ui:^2.4

    php artisan ui vue --auth

Laravel creerà in automatico lo scaffolding per gestire la registrazione di utenti. Saranno create la pagina di login e di registrazione (in queste pagine laravel utilizza bootstrap che quindi sarà importato nel progetto anche lui in automatico).

In fase di sviluppo si può creare anche un seeder per avere degli user fake.

La password nella tabella User sarà criptata in una stringa di caratteri in modo tale che dalla password si può arrivare con un algoritmo alla stringa di caratteri per verificare che la password corrisponda ma dalla stringa di caratteri nella tabella non si può risalire alla password effettiva (o comunque magari si può ma richiede computer molto potenti impegnati per moltissimo tempo).

Si utilizzano poi i controller per definire quali rotte sono accessibili a tutti e quali solo a utenti registrati.
