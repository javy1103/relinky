var plugins = require("gulp-load-plugins")({
    pattern: ['gulp-*', 'gulp.*'],
    replaceString: /\bgulp[\-.]/
})

plugins.concat = require('gulp-concat')

console.log(plugins);
