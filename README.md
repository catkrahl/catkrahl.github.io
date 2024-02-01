### SSG Aufruf zum Kopilieren _dist-folder
php ../static-site-generator/generate.php .

### Doil als Webserver für SSG/CaT Website benutzen
* aus einem Verzeichnis z.b.: cat-web: ~/web/cat-web
* php ../static-site-generator/generate.php ../cat-web/ ~/projects/instances/catweb/volumes/ilias
* catweb: Name der doil-Instanz (der ILIAS-Ordner sollte leer sein!)
* wert in _settings.yml "base-target" muss auf doil instanz zeigen!

### Bash-Script zum init von git und push auf github-pages
* cd doil-instance ./volumes/ilias
* bash ghpages.sh
* WARUM: das script initialisiert git und pushed den inhalt nach github pages, weil der SSG das Verzeichnis beim Compilieren immer komplett überschreibt und git dann nicht mehr verfügbar ist!

### SCSS (auto-)kompilieren and watch
* sass --watch ./_scss/main.scss ./css/main.css
* Zielverzeichnis für css-Ausgabe ist variabel!

# Tag setzen zum publizieren
git pull --tags
git tag -a $VERSION -m "$MESSAGE"
git push --tags

# twig errors 2023-05-25
* "page_meta"-variable does noct exist
* "folder"-variable does not exist
* "contact_settings"

### third party 
#### AOS - onscroll animation lib
* https://github.com/michalsnik/aos/blob/next/README.md

#### OpenPlayer 
* https://github.com/openplayerjs/openplayerjs/blob/master/README.md

#### Sonderzeichen in Markdown
* Forward-Slash-Maskierung: 
  * z.B.: \*

#### auf github pages veröffentlichen
* ghpages-branch anlegen
* Inhalt _dist-Verzeichnis im Dateibrowser auf oberste Ebene kopieren 
* alle anderen Ordner löschen
* force-push branch zu ghpages-remote
* auf master switchen
* ghpages-branch wieder löschen
* http://www.catkrahl.github.io aufrufen
