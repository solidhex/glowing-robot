# Glowing Robot

Boilerplate Theme for Rapidly Creating Custom Wordpress Event Planner Websites.

## Setup

This project requires CodeKit >= 1.9.3 to run Compass and Sass. 

The assets folder houses the Sass, CSS, JS, images and fonts. The config.rb compiles assets/scss/style.scss to /assets/css/style.css _then_ moves style.css into the root directory of the theme. 

I shamelessly ripped this off from CSS Tricks http://css-tricks.com/compass-compiling-and-wordpress-themes/.

In the `assets/js/main.js` file, I'm pre-pending dependencies, utilities, plugins and libaries into the main.js file, then concatening and minifying the output to assets/js/dis/main.min.js.