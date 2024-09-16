# Kompilieren der Website:
Aufruf der generate.php aus lokalem cate-web-repo

### Kompilieren mit Static Site Generator in doil container mit webserver
* php ../static-site-generator/generate.php ../cate-web/ ~/projects/instances/cateweb/volumes/ilias
* auf richtige PHP-Version (7.4) achten!
* php ../static-site-generator/generate.php .

# Aufruf Website:
webserver:
http://doil/$instance-name
lokal:
chrome/firefox ~/web/cate-web/_dist/index.html

# Tag setzen zum publizieren
git pull --tags
git tag -a $VERSION -m "$MESSAGE"
git push --tags

### Bunny Pullzone
https://cate-tms.b-cdn.net/images/logo.png
