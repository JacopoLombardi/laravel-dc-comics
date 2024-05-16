# Day 1

### Creare un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

CRUD TODO LIST:
- clonare il template.
- creare la migration.
- creare il model.
- popolare la tabella con il seeder (dall’array presente in config).
- creare il resource controller (php artisan make:controller --resource NomeController).
- creare le rotte resource (Route::resource('nome_tabella', MioResourceController::class);).
- relativamente alle rotte GET creare  le view in una cartella con il nome della tabella della CRUD e con il nome del metodo del resource controller relativo.
#
Per la navigazione:
- la rotta home è fuori dalla CRUD (se si s vuole si può stampatre il numero di card presenti).
- elenco prodotti   (GET index).
- dettaglio prodotto  (GET show).
- form nuovo prodotto (GET create) (ricordarsi il token @csrf).
- rotta per salvare i dati provenienti dal form create (POST store).
- una volta salvati i dati reindirizzare alla show (return redirect()->route('mia_tabella.show', $new_elemento);).
