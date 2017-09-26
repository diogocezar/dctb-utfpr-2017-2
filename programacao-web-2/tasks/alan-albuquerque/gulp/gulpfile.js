var gulp = require('gulp');
var minify = require('gulp-minify');

gulp.task('default', function() {
	gulp.src('js/*.js')
	  .pipe(minify())
	  .pipe(gulp.dest('js'));

  gulp.src('css/*.css')
	  .pipe(minify())
	  .pipe(gulp.dest('css'));
});