Gulp = {
	self	: null,
	uglify	: null,
	cssmin	: null,
	js		: null,
	
	init: function(){
		
		Gulp.self		= require('gulp');
		Gulp.uglify		= require('gulp-uglify');
		Gulp.cssmin		= require('gulp-cssmin');
		
		Gulp.css();
		Gulp.js();
		Gulp.watch();
		Gulp.default();
		
	},
	
	css: function(){
		Gulp.self.task('css', function(){
			console.log('[CSS] Minificando Arquivos CSS');
			Gulp.self.src('./assets/css/**/*.css')
			.pipe(Gulp.cssmin())
			.pipe(Gulp.self.dest('./dist/css'));
		});
	},
	
	js: function(){
		Gulp.self.task('js', function(){
			console.log('[JS] Minificando Arquivos JavaScript');
			Gulp.self.src('./js/**/*.js')
			.pipe(Gulp.uglify())
			.pipe(Gulp.self.dest('./dist/js'))
		});
	},
	
	default: function(){
		Gulp.self.task('default', ['js', 'css']);
	},
	
	watch: function(){
		Gulp.self.task('watch', function(){
			Gulp.self.watch('./js/**/*.js', ['js']);
			Gulp.self.watch('./assets/css/**/*.css', ['css']);
		});
	}
}

Gulp.init();
