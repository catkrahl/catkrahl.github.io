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

# twig errors 2023-05-25
* "page_meta"-variable does noct exist
* "folder"-variable does not exist
* "contact_settings"
* 
