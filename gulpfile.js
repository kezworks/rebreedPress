// rebreedPress
// Ver 1.1.0

// SETTINGS
const localDir        = "";

const gulp            = require('gulp');
const sass            = require('gulp-sass');
const sassGlob        = require('gulp-sass-glob');
const autoprefixer    = require('gulp-autoprefixer');
const packageImporter = require('node-sass-package-importer');
const browserSync     = require('browser-sync');
const plumber         = require("gulp-plumber");

// SASS
gulp.task('sass', function(done) {
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
    done();
});

// BROWSER SYNC
gulp.task('browser-sync', function(done) {
  browserSync({
    proxy: "localhost/" + localDir,
  });
  done();
});

gulp.task('reload', function(done) {
  browserSync.reload();
  done();
});

// WATCH
gulp.task('watch', function() {
  gulp.watch('./src/assets/scss/**/*.scss', gulp.series('sass', 'reload'));
  gulp.watch('./**/*.php', gulp.task('reload'));
});

// DEFAULT
gulp.task('default', gulp.series('watch', 'browser-sync'));
