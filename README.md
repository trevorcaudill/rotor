# rotor

Bare Bones child theme for GeneratePress that is SASS ready.

## Install

Clone repo to theme directory and run `npm install` to download all of the packages

## SASS

I've created a few SCSS files for your convenience to help organize any custom css for the website. 

## Scripts

Add all javascript to the `custom-scripts.js` file.

### Sidebars

You can unregister any unwanted sidebars you do not need by uncommenting them out of the `setup.php` file.

### Gulp

Here are some of the useful Gulp tasks already set up for you. 

- `postcss` Compile all of the SCSS files
- `cssminify` Compresses the style.css file
- `sass-lint` SASS linter
- `styles` runs `postcss`, `cssminify` and `sass-lint`
- `watch` a watcher for `styles`
- `compressjs` compiles and uglifies all of the js files
- `watchjs` watcher for `compressjs`