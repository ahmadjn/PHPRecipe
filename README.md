# PHPRecipe

![Alt text](/src/phprecipe.jpg?raw=true "PHPRecipe")

PHPRecipe is PHP Scraper and Parser Recipes Scheme for Recipes Site like Allrecipes.com and Food.com with Cache Feature. Output data files is JSON Formatted that contains Recipe Name, Recipe Image, Ingredients, Instruction and Review. 
#### Current Cache Files = 76.068 Files(Recipes) for Parser and Export.

## Installation

Download this Repo Package ("src" folder), Unzip and Run this command below in Terminal from PHPRecipe folder.

```bash
php resep.php
```
or If you using Windows, just execute "run.bat" file.

## EXPORT

Export JSON data file to HTML Formatted for Hugo Content. Use command below

```bash
php convert_md.php
```

## Requirements

PHP 7.2+

## Notes

Outputnya masih JSON, sementara dibuat Converternya untuk MD/HTML file untuk HUGO dan HTML file untuk Blogger (Belum bikin untuk XML Blogger).

## License
[MIT](https://choosealicense.com/licenses/mit/)
