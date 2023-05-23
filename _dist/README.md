# cat-web
re-design CaT website

# Kompilieren der Website:
Aufruf der generate.php aus lokalem web-repo

### Ubuntu
php ../static-site-generator/generate.php .

# Aufruf Website:
chrome/firefox ~/web/cate-web/_dist/index.html

# Tag setzen zum publizieren
git pull --tags
git tag -a $VERSION -m "$MESSAGE"
git push --tags