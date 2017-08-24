const gulp = require('gulp');
const less = require('gulp-less');
const browserify = require('browserify');
const babelify = require('babelify');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');

const src = {
  less: ['./assets/less/', './'], // key: [source, target]
  js: ['./assets/js/', './js/']
};

// <--------------------------------------->

gulp.task('less', () => {
  return gulp.src(src.less[0] + '*.less')
    .pipe(less())
    .pipe(gulp.dest(src.less[1]));
});

const jsFiles = [
  'common'
];
gulp.task('js', () => {
  jsFiles.forEach( e => {
    let b = browserify({
      entries: src.js[0] + e + '.js',
      debug: true,
      transform: [babelify.configure({
        presets: ['es2015']
      })]
    });
    return b.bundle()
      .pipe(source( e + '.js' ))
      .pipe(buffer())
      .pipe(gulp.dest(src.js[1]));
  });
});

// <--------------------------------------->

gulp.task('watch-less' , () => {
  gulp.watch(src.less[0] + '**', ['less']);
});
gulp.task('watch-js' , () => {
  gulp.watch(src.js[0] + '**', ['js']);
});

gulp.task('dev', ['less', 'js', 'watch-less', 'watch-js']);
gulp.task('default', ['dev']);
gulp.task('prod', ['less', 'js']);
