var gulp       = require('gulp'),
    scss         = require('gulp-sass'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglifyjs'),
    cssnano      = require('gulp-cssnano'),
    rename       = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
    return gulp.src('wp-content/themes/gonatural/assets/scss/**/*.scss')
        .pipe(scss())
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 9'], { cascade: true }))
        .pipe(gulp.dest('wp-content/themes/gonatural/assets/css'));
});

gulp.task('scripts', function() {
    return gulp.src([
        'node_modules/jquery/dist/jquery.min.js'
    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('wp-content/themes/gonatural/assets/js'));
});

gulp.task('css-libs', ['sass'], function() {
    return gulp.src([
        'node_modules/normalize.css/normalize.css',
        'node_modules/font-awesome/css/font-awesome.min.css'
    ])
        .pipe(concat('libs.css'))
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('wp-content/themes/gonatural/assets/css'));
});

gulp.task('watch', ['css-libs', 'scripts'], function() {
    gulp.watch('wp-content/themes/gonatural/assets/scss/**/*.scss', ['sass']);
});

gulp.task('default', ['watch']);