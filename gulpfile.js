// rebreedPress
// Ver 1.0.4

const gulp            = require('gulp');
const sass            = require('gulp-sass');
const sassGlob        = require('gulp-sass-glob');
const autoprefixer    = require('gulp-autoprefixer');
const packageImporter = require('node-sass-package-importer');
const browserSync     = require('browser-sync');
const plumber         = require("gulp-plumber");

// SASS
gulp.task('sass', function() {
  gulp.src('./src/assets/scss/*.scss')
    .pipe(plumber())
    .pipe(sassGlob())
    .pipe(sass({
        importer: packageImporter({
            extensions: ['.scss', '.css']
        })
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 version', 'iOS >= 8.1', 'Android >= 4.4'],
      cascade: false
    }))
    .pipe(gulp.dest('./dist/assets/css/'));
});

// BROWSER SYNC
gulp.task('browser-sync', function() {
  browserSync({
    proxy: "localhost/tottoto.info/",
  });
});

gulp.task('reload', function() {
  browserSync.reload();
});

// WATCH
gulp.task('watch', function() {
  gulp.watch('./src/assets/scss/**/*.scss', ['sass', 'reload']);
gulp.watch('./**/*.php', ['reload']);
});

// DEFAULT
gulp.task('default', ['watch', 'browser-sync']);
