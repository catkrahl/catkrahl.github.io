# Doil als Webserver für SSG/CaT Website benutzen
* aus einem Verzeichnis z.b.: cat-web: ~/web/cat-web
* php ../static-site-generator/generate.php ../cat-web/ ~/projects/instances/r77/volumes/ilias
* r77: Name der doil-Instanz (sollte leer sein!)
* wert in _settings.yml "base-target" muss auf doil instanz zeigen!

# Bash-Script zum Kopieren _dist-Dateien ins www-webserver-Verzeichnis
* sudo ~/projects/scripts/copychown
* das Script macht:
  * führt den SSG aus, der alle Dateien kompiliert
  * kopiert alle Dateien aus dem _dist-Verzeichnis ins www-Verzeichnis des Webserver und 
  * ändert die Rechte zu www-data

# SCSS (auto-)kompilieren and watch
* sass --watch ./scss/main.scss ./css/main.css
* Zielverzeichnis für css-Ausgabe ist variabel!

### SSG Aufruf zum Kopilieren
php ../static-site-generator/generate.php .

# cat-web
* re-design CaT website

# Kompilieren der Website:
* Aufruf der generate.php aus lokalem web-repo

# Aufruf Website:
* chrome/firefox ~/web/cate-web/_dist/index.html
* localhost:8080

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

#### Sonderzeichen in Markdown
* Backslashmaskierung: 
  * z.B.: \*

#### auf github pages veröffentlichen
* ghpages-branch anlegen
* Inhalt _dist-Verzeichnis im Dateibrowser auf oberste Ebene kopieren 
* alle anderen Ordner löschen
* force-push branch zu ghpages-remote
* auf master switchen
* ghpages-branch wieder löschen
* http://www.catkrahl.github.io aufrufen