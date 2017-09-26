var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');

/*
 * Variables
 */
// Sass Source
var scssFiles = './scss/*.scss';


// CSS destination
var cssDest = './css';

// Options for development
var sassDevOptions = {
  outputStyle: 'expanded'
}

// Options for production
var sassProdOptions = {
  outputStyle: 'compressed'
}

/*
 * Tasks
 */
// Task 'sassdev' - Run with command 'gulp sassdev'
gulp.task('sassdev', function() {
  return gulp.src(scssFiles)
    .pipe(sass(sassDevOptions).on('error', sass.logError))
    .pipe(gulp.dest(cssDest));
});



// Task 'watch' - Run with command 'gulp watch'
gulp.task('watch', function() {
  gulp.watch(scssFiles, ['sassdev']);
});

// Default task - Run with command 'gulp'
gulp.task('default', ['sassdev', 'watch']);