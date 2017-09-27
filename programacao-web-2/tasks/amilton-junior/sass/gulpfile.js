var gulp		= require('gulp');
var browserSync	= require('browser-sync').create();
var sass		= require('gulp-sass');
var gutil		= require('gulp-util');

function swallowError (error) {
    console.log(error.toString());
    this.emit('end');
}

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./"
    });

    gulp.watch("scss/*.scss", ['sass']);
    gulp.watch("*.html").on('change', browserSync.reload());
	
});


gulp.task('sass', function() {
    return gulp.src("scss/*.scss")
        .pipe(sass())
        .on('error', swallowError)
        .pipe(gulp.dest("css"))
        .pipe(browserSync.stream())
});

gulp.task('default', ['serve']);
