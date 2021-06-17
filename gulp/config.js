
const source = '../assets';

const target = '../dist';

const cssMode = 'less' // 'less' || 'sass';

const JSFiles = [
    source +'/plugins/elevatezoom/jquery.elevatezoom.js',
    source +'/plugins/magnific-popup/jquery.magnific-popup.min.js',
    source +'/js/aos.js',
    source +'/js/libs/anime.min.js',
    source +'/js/libs/jquery.sticky-sidebar.min.js',
    source +'/plugins/masonry/masonry.pkgd.min.js',
    source +'/plugins/masonry/isotope.pkgd.min.js',
    source +'/js/main.js',
];

const CSSFiles =  [
    source + '/css/typography.css',
    source + '/plugins/magnific-popup/magnific-popup.css',
    source + '/css/typography.css',
    source + '/css/custom.css'
];

const custom = [
    {
        input: [ `${source}/css/less/main.less` ],
        output: `${source}/css/main.css`,
        cssMode: 'less',
        suffix: ''
    }
];



module.exports = {
    cssMode,
    source,
    target,
    js: JSFiles,
    // css: CSSFiles,
    // custom
};
