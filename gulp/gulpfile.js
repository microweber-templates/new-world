const gulp = require('gulp')
const sass = require('gulp-sass');
const less = require('gulp-less');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const cssmin = require('gulp-cssmin');
const jshint = require('gulp-jshint');
const watch = require('gulp-watch');
const shell = require('gulp-shell');
const gulpCopy = require('gulp-copy');
const uglify = require('gulp-uglify');
const rebaseUrls = require('gulp-css-url-fix');

const config = require('./config');

let count = 0;
const mwpath = config.source;
const dest = config.target;

const cssMode = {
    sass: sass,
    less: less
};


const tplJS = async (prod) => {
    return new Promise(async resolve => {
        const files = config.js;
        let stream = gulp.src(files);
        if(!prod) {
            stream = stream.pipe(sourcemaps.init())
        }
        if(prod) {
            stream = stream.pipe(uglify({mangle: false}));
        }
        if(!prod) {
            stream = stream.pipe(sourcemaps.write());
        }
        stream.pipe(concat(  'main.js', {newLine: ';\r\n'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(dest))
        .on("end", resolve);
    });
}

const tplCSS = async (prod) => {
    return new Promise(resolve => {
    const files = config.css;
        let stream = gulp.src(files);
        stream = stream.pipe(rebaseUrls())
        if(!prod) {
            stream = stream.pipe(sourcemaps.init())
        }
        stream = stream.pipe(cssMode[config.cssMode]());
        if(prod) {
            stream = stream.pipe(cssmin());
        }
        stream = stream.pipe(concat(  'main.css', {newLine: ';\r\n'}));
        if(!prod) {
            stream = stream.pipe(sourcemaps.write());
        }
        stream = stream.pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(dest))
        .on("end", resolve);
    });
}

gulp.task('dev',  () => {
    watch( mwpath + '/**/*.js',  { ignoreInitial: false }, async (files) => {
        await tplJS();
        count++;
        console.log(count + ' - js');
    });

    watch([mwpath + '/**/*.scss', mwpath + '/**/*.css', mwpath + '/**/*.less'],  { ignoreInitial: false }, async (files) => {
        await tplCSS();
        count++;
        console.log(count + ' - css');
    });
});

gulp.task('prod',  async () => {
    tplCSS(true);
    tplJS(true);
});
