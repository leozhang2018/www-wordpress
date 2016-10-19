/*
 * @file gulp file
 * @author leozhang2018 <leozhang2018@gmail.com>
 */

var gulp = require('gulp')
var rm = require('gulp-rm')
var rename = require("gulp-rename")
var base64 = require('gulp-base64')
var minifyCss = require('gulp-minify-css')
var imagemin = require('gulp-imagemin')
var runSequence = require('run-sequence')
var uglify = require('gulp-uglify')
var rev = require('gulp-rev')
var revCollector = require("gulp-rev-collector")
var zip = require('gulp-zip')

var paths = {
    img: 'images/**/*.*',
    style: 'style.css',
    font: 'font/*.*',
    script: 'js/*.js',
    php: './**/*.php',
    banner: 'screenshot.png'
}

var dist = {
    img: './dist/images/**/*.*',
    style: './dist/*.css',
    script: './dist/js/*.js',
    font: './dist/font/*.*',
    php: './dist/**/*.php'
}


gulp.task('clean', function() {
    return gulp.src('dist/**', { read: false })
        .pipe(rm())
})

gulp.task('deploy-clean', function() {
    return gulp.src('deploy/**', { read: false })
        .pipe(rm())
})

//压缩图片
gulp.task('img', function() {
    return gulp.src(paths.img, { base: 'img' })
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/img'))
})

//压缩 style
gulp.task('style', function() {
    // var autoprefix = new LessAutoprefix({
    //     browsers: [
    //         'last 2 versions',
    //         'ie >= 9',
    //         'Firefox >= 20',
    //         'Chrome >= 45',
    //         'iOS >= 7',
    //         'Android >= 4.4'
    //     ]
    // })

    return gulp.src(paths.style, { base: './' })
        .pipe(base64({
            extensions: ['png', 'jpg'],
            // <= 20 KB
            maxImageSize: 20 * 1024,
            debug: false
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('./dist'))
})


//css fingerprint(由于 style.css 由 blog_info 函数指定,故不能 hash,只压缩 )
gulp.task('hashcss', function() {
    return gulp.src(dist.style)
        .pipe(gulp.dest('./deploy'))
});


//压缩 js
gulp.task('script', function() {
    return gulp.src(paths.script, { base: 'js' })
        .pipe(uglify())
        .pipe(gulp.dest('./dist/js'))
})

//js fingerprint
gulp.task('hashjs', function() {
    return gulp.src(dist.script)
        .pipe(rev()) //set hash key
        .pipe(gulp.dest('./deploy/js/'))
        .pipe(rev.manifest()) //set hash key json
        .pipe(gulp.dest('./deploy/js/revJson')); //dest hash key json
});

//php 文件
gulp.task('php', function() {
    return gulp.src(paths.php)
        .pipe(gulp.dest('./dist'))
})

//封面
gulp.task('banner', function() {
        return gulp.src(paths.banner)
            .pipe(gulp.dest('./dist'))
    })
    //deploy 封面
gulp.task('deploy-banner', function() {
    return gulp.src(paths.banner)
        .pipe(gulp.dest('./deploy'))
})


//font
gulp.task('font', function() {
    return gulp.src(paths.font)
        .pipe(gulp.dest('./dist/font'))
})

gulp.task('build', ['clean'], function(cb) {
    runSequence(['img', 'style', 'script', 'page', 'font'], cb)
})


//全局替换资源
gulp.task('rev', function() {
    return gulp.src(['./deploy/**/revJson/*.json', dist.php])
        .pipe(revCollector({
            replaceReved: true,
        }))
        .pipe(gulp.dest('./deploy'));
})

gulp.task('font-deploy', function() {
    return gulp.src(dist.font)
        .pipe(gulp.dest('./deploy/font'))
})

gulp.task('img-deploy', function() {
    return gulp.src(dist.img)
        .pipe(gulp.dest('./deploy/images'))
})
//打包压缩
gulp.task('zip', function () {
var today = new Date();
var yr = today.getFullYear();
var month= today.getUTCMonth();
var day = today.getUTCDate();
var h = today.getUTCHours() + 8;
var m = today.getUTCMinutes();
var timeStamp = yr + "-" + month + "-" + day +" "+ h + ":" + m;
    return gulp.src('./deploy/**/*')
        .pipe(zip(timeStamp + '.zip'))
        .pipe(gulp.dest('./distribution'));
});


//构建到 dist,只压缩
gulp.task('build', ['clean'], function(cb) {
    runSequence(['style', 'script', 'php', 'banner', 'font', 'img'], cb)
})

//线上版本增加指纹
gulp.task('deploy', ['deploy-clean'], function(cb) {
    runSequence(['hashjs', 'hashcss', 'font-deploy', 'img-deploy', 'deploy-banner'], 'rev', 'zip',cb)
})




gulp.task('default', ['build'])
