var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var minifyCSS = require('gulp-csso');

gulp.task('css', function(){
    return gulp.src('css/*.less')
      .pipe(less())
      .pipe(minifyCSS())
      .pipe(gulp.dest('css'))
});

gulp.task('watch', function() {
    gulp.watch('css/*.less', ['css']);
});

gulp.task('default', ['watch']);