module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        bowercopy: {
            options: {
                srcPrefix: 'bower_components',
                destPrefix: 'web/assets'
            },
            scripts: {
                files: {
                    'js/jquery.js': 'jquery/dist/jquery.js',
                    'js/bootstrap.js': 'bootstrap/dist/js/bootstrap.js'
                }
            },
            stylesheets: {
                files: {
                    'css/bootstrap.css': 'bootstrap/dist/css/bootstrap.css',
                    'css/font-awesome.css': 'font-awesome/css/font-awesome.css'
                }
            },
            fonts: {
                files: {
                    'fonts': 'font-awesome/fonts'
                }
            }
        },
        cssmin: {
            bundled: {
                src: 'web/assets/css/bundled.css',
                dest: 'web/assets/css/bundled.min.css'
            }
        },
        uglify: {
            js: {
                files: {
                    'web/assets/js/bundled.min.js': ['web/assets/js/bundled.js']
                }
            }
        },
        concat: {
            options: {
                stripBanners: true
            },
            css: {
                src: [
                    'web/assets/css/bootstrap.css',
                    'web/assets/css/font-awesome.css',
                    'app/Resources/public/css/*.css'
                ],
                dest: 'web/assets/css/bundled.css'
            },
            js: {
                src: [
                    'web/assets/js/jquery.js',
                    'web/assets/js/bootstrap.js',
                    'app/Resources/public/js/*.js'
                ],
                dest: 'web/assets/js/bundled.js'
            }
        },
        copy: {
            images: {
                expand: true,
                cwd: 'app/Resources/public/images',
                src: '*',
                dest: 'web/assets/images/'
            },
            json: {
                expand: true,
                cwd: 'app/Resources/public/json',
                src: '*',
                dest: 'web/assets/json'
            }
        },
        compass: {
            dist: {
                options: {
                    sassDir: 'app/Resources/public/sass',
                    cssDir: 'app/Resources/public/css'
                }
            }
        },
        watch: {
            sass: {
                files: 'app/Resources/public/sass/*.sass',
                tasks: ['compass']
            },
            css: {
                files: ['app/Resources/public/css/*.css'],
                tasks: ['concat', 'cssmin']
            },
            js: {
                files: ['app/Resources/public/js/*.js'],
                tasks: ['concat', 'uglify']
            },
            images: {
                files: ['app/Resources/public/images/*.png',
                    'app/Resources/public/images/*.jpg',
                    'app/Resources/public/images/*.gif',
                    'app/Resources/public/images/*.ico'],
                tasks: ['copy']
            }
        }
    });

    grunt.loadNpmTasks('grunt-bowercopy');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['bowercopy', 'copy', 'compass', 'concat', 'cssmin', 'uglify', 'watch']);
};