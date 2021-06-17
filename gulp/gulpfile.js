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
const cssnano = require('gulp-cssnano');

let count = 0;
const mwpath = config.source;
const cssTarget = config.cssTarget || config.target;
const jsTarget = config.jsTarget || config.target;

const cssMode = {
    sass: sass,
    less: less
};


const customWatch = () => {
    const res = [];
    config.custom.forEach(a => {
        return res.push(...a.input);
    });
    return res;
};

const custom = async (prod) => {
    return new Promise(async resolve => {
if(!config.custom){
    resolve()
    return;
}
        config.custom.forEach(async a => {
            const files = a.input;
            a.cssMode = a.cssMode || 'less';
            const outputArr = a.output.split('/');
            const name = outputArr.pop();
            const output = outputArr.join('/');
            let stream = gulp.src(files);
            if(!prod) {
                stream = stream.pipe(sourcemaps.init());
            }
            stream = stream.pipe(cssMode[a.cssMode]());
            //stream = stream.pipe(rebaseUrls());

            if(prod) {
                stream = stream.pipe(cssmin());
            }
            stream = stream.pipe(concat(  name, {newLine: ';\r\n'}));

            if(!prod) {
                stream = stream.pipe(sourcemaps.write());
            }
            stream = stream.pipe(rename({suffix: a.suffix || ''}))
                .pipe(gulp.dest(output))
                .on("end", resolve);
        });

    });
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
        .pipe(gulp.dest(jsTarget))
        .on("end", resolve);
    });
};

const tplCSS = async (prod) => {
    return new Promise(resolve => {
    const files = config.css;
    if(!files) {
        resolve()
        return;
    }
        let stream = gulp.src(files);
        // stream = stream.pipe(rebaseUrls())
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
        .pipe(gulp.dest(cssTarget))
        .on("end", resolve);
    });
}

gulp.task('dev',  () => {
    watch( mwpath + '/**/*.js',  { ignoreInitial: false }, async (files) => {
        await tplJS();
        count++;
    }).on('all', function(path, stats) {
        console.log(`File ${path} was changed`);
    });

    watch([mwpath + '/**/*.scss', mwpath + '/**/*.css', mwpath + '/**/*.less'],  { ignoreInitial: false }, async (files) => {
        await tplCSS();
        count++;
    }).on('all', function(path, stats) {
        console.log(`File ${path} was changed`);
    });

    watch(customWatch(),  { ignoreInitial: false }, async (files) => {
        await custom();
        count++;
    }).on('all', function(path, stats) {
        console.log(`File ${path} was changed`);
    });
});

gulp.task('prod',  async () => {
    tplCSS(true);
    tplJS(true);
    custom(true)
});
