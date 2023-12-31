module.exports = grunt => {
    // Load all grunt tasks matching the ['grunt-*', '@*/grunt-*'] patterns
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        dirs: {
            js: 'src/styles/js',
            css: 'src/styles/css',
            plugin: 'src/styles/plugins',
            html: 'src/templates',
            dist: 'assets/dist',
        },
        clean: ['assets/dist'],
        // pug: {
        //     release: {
        //         options: {
        //             data: {
        //                 debug: false,
        //                 pretty: true
        //             }
        //         },
        //         files: [
        //             {
        //                 expand: true,
        //                 cwd: '<%= dirs.html %>/',
        //                 src: '*.pug',
        //                 ext: '.html',
        //                 dest: 'dist/'
        //             },
        //             {
        //                 expand: true,
        //                 cwd: '<%= dirs.html %>/ajax/',
        //                 src: '*.pug',
        //                 ext: '.html',
        //                 dest: 'dist/assets/dist/ajax/',
        //             }
        //         ]
        //     }
        // },
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: false,
                    lineNumbers: true,
                    update: true,
                },
                files: [
                    {
                        flatten: true,
                        expand: true,
                        cwd: 'src/styles/css/',
                        src: ['*.scss', 'pages/*.scss'],
                        ext: '.css',
                        dest: '<%= dirs.dist %>/release/'
                    }
                ]
            }
        },
        autoprefixer: {
            options: {
                // We need to `freeze` browsers versions for testing purposes.
                browsers: ['last 5 versions', 'opera 12', 'ff 15', 'chrome 25', 'iOS 13.2', 'ie 8', 'ie 9']
            },
            multiple_files: {
                expand: false,
                flatten: false,
                src: '<%= dirs.dist %>/release/*.css',
            },
        },
        babel: {
            options: {
                sourceMap: true,
                presets: ['@babel/preset-env']
            },
            dist: {
                files: [
                    {
                        flatten: true,
                        expand: true,
                        cwd: 'src/styles/js/',
                        src: ['*.js', 'pages/*.js'],
                        ext: '.js',
                        dest: '<%= dirs.dist %>/release/'
                    }
                ]
            }
        },
        uglify: {
            options: {
                beautify: false
            },
            my_target: {
                files: {
                    // '<%= dirs.dist %>/updateFile.js': [
                    //     '<%= dirs.js %>/components/updateFile.js'
                    // ],
                    // Ext
                    '<%= dirs.dist %>/release/lang.min.js': [
                        '<%= dirs.plugin %>/multi-language/multi-language.js',
                        '<%= dirs.plugin %>/lang.js'
                    ],
                    '<%= dirs.dist %>/release/webfontloader.min.js': [
                        'node_modules/webfontloader/webfontloader.js',
                    ],
                    '<%= dirs.dist %>/release/jquery.min.js': [
                        'node_modules/jquery/dist/jquery.js',
                    ],
                    '<%= dirs.dist %>/release/instantpage.min.js': [
                        '<%= dirs.plugin %>/instantpage/instantpage.js',
                    ],
                    // Core
                    '<%= dirs.dist %>/release/core.min.js': [
                        // core
                        '<%= dirs.js %>/core.js',
                        '<%= dirs.js %>/components/setTab.js',
                        '<%= dirs.js %>/components/initDropdownAction.js',
                        '<%= dirs.js %>/components/initScrollTopButton.js',
                        '<%= dirs.js %>/components/stickyContent.js',
                        '<%= dirs.js %>/components/scrollDirection.js',
                        '<%= dirs.js %>/components/cutomizeSelect.js',
                        '<%= dirs.js %>/components/accordion.js',
                        '<%= dirs.js %>/components/stickySidebar.js',
                        '<%= dirs.js %>/components/zoomImage.js',
                        '<%= dirs.js %>/components/fancyBox.js',
                        '<%= dirs.js %>/components/popup.js',
                        '<%= dirs.js %>/components/initPopup.js',
                        '<%= dirs.js %>/components/miniPopup.js',
                        '<%= dirs.js %>/components/togglerMake.js',
                        '<%= dirs.js %>/components/scrollTo.js',
                        '<%= dirs.js %>/components/menu.js',
                        '<%= dirs.js %>/components/slider.js',
                        '<%= dirs.js %>/components/sideBar.js',
                        '<%= dirs.js %>/components/draggAble.js',
                        '<%= dirs.js %>/components/shareSocial.js',
                        '<%= dirs.js %>/components/tippy.js',
                        '<%= dirs.js %>/components/flatpickr.js',
                        // Acc
                        //'<%= dirs.js %>/components/initScrollLoad.js',
                        // Content
                        '<%= dirs.js %>/components/readMore.js',
                        // '<%= dirs.js %>/components/tableOfContent.js',
                        // '<%= dirs.js %>/components/uploadFile.js',
                        // Product
                        // '<%= dirs.js %>/components/shop.js',
                        // '<%= dirs.js %>/components/quantityInput.js',
                        // '<%= dirs.js %>/components/initSelectMenu.js',
                        // '<%= dirs.js %>/components/initCheckBoxMenu.js',
                        // '<%= dirs.js %>/components/initSelectSideBar.js',
                        // '<%= dirs.js %>/components/wishlistAction.js',
                        // '<%= dirs.js %>/components/productSingle.js',
                        // '<%= dirs.js %>/components/productSinglePage.js',
                        // '<%= dirs.js %>/components/shoppingCart.js',
                        // '<%= dirs.js %>/components/ratingTooltip.js',
                        // Plugin
                        // '<%= dirs.js %>/components/marquee.js',
                        // '<%= dirs.js %>/components/pageScrollToId.js',
                        // '<%= dirs.js %>/components/preSearch.js',
                        // '<%= dirs.js %>/components/typeWriter.js',

                        // '<%= dirs.js %>/components/initFloatingParallax.js',
                        // '<%= dirs.js %>/components/isotopes.js',
                        // '<%= dirs.js %>/components/initNavFilter.js',

                        // '<%= dirs.js %>/components/setProgressBar.js',
                        // '<%= dirs.js %>/components/countDown.js',
                        // '<%= dirs.js %>/components/countTo.js',
                        // '<%= dirs.js %>/components/fakeLoadMore.js',
                        // '<%= dirs.js %>/components/notiCustomer.js',
                        // '<%= dirs.js %>/components/ezParallax.js',
                        // '<%= dirs.js %>/components/mouseFollow.js',
                    ],
                    // Default all page
                    '<%= dirs.dist %>/release/default.min.js': [
                        'node_modules/@popperjs/core/dist/umd/popper.min.js',
                        'node_modules/tippy.js/dist/tippy.umd.min.js',
                        'node_modules/draggabilly/dist/draggabilly.pkgd.min.js',
                        'node_modules/jquery-validation/dist/jquery.validate.min.js',
                        '<%= dirs.plugin %>/fancybox/fancybox.min.js',
                        'node_modules/swiper/swiper-bundle.js',
                        'node_modules/flatpickr/dist/flatpickr.min.js',
                    ],
                    '<%= dirs.dist %>/release/layout.min.js': [
                        '<%= dirs.js %>/layout.js',
                    ],
                    // Documentation
                    '<%= dirs.dist %>/release/document.min.js': [
                        'node_modules/typewriter-effect/dist/core.js',
                        '<%= dirs.dist %>/release/core.min.js',
                        '<%= dirs.js %>/document.js',
                    ],

                    // Index
                    '<%= dirs.dist %>/release/all.min.js': [
                        '<%= dirs.dist %>/release/core.min.js',
                        '<%= dirs.js %>/pages/index.js',
                        '<%= dirs.js %>/pages/blogcat.js',
                        '<%= dirs.js %>/pages/blogdetail.js',
                        '<%= dirs.js %>/pages/static.js',
                    ]
                }
            },
            // my_advanced_target: {
            //     options: {
            //         beautify: false
            //     },
            //     files: [{
            //         expand: true,
            //         cwd: 'styles/modulejs',
            //         src: ['*.js'],
            //         dest: '<%= dirs.dist %>/',
            //         ext: '.min.js'
            //     }]
            // }
        },
        cssmin: {
            options: {
                specialComments: 0
            },
            my_target: {
                files: [{
                    'src/icons/customize.min.css': [
                        'src/icons/customize.css',
                    ],
                    // Main
                    '<%= dirs.dist %>/release/main.min.css': [
                        '<%= dirs.plugin %>/animate/animate.min.css',
                        '<%= dirs.dist %>/release/layout.css',
                    ],
                    // Default all page
                    '<%= dirs.dist %>/release/default.min.css': [
                        'node_modules/tippy.js/dist/tippy.css',
                        '<%= dirs.plugin %>/fancybox/fancybox.min.css',
                        'node_modules/swiper/swiper-bundle.min.css',
                        'node_modules/flatpickr/dist/flatpickr.min.css',
                    ],
                    // Documentation
                    '<%= dirs.dist %>/release/document.min.css': [
                        '<%= dirs.dist %>/release/document.css',
                    ],

                    // Index
                    '<%= dirs.dist %>/release/all.min.css': [
                        '<%= dirs.dist %>/release/index.css',
                        '<%= dirs.dist %>/release/blog.css',
                        '<%= dirs.dist %>/release/static.css',
                    ]
                }]
            }
        },
        sprite: {
            all: {
                padding: 5,
                src: 'src/images/sprite/*.{jpg,png}',
                imgPath: '/assets/images/sprite/sprite.png',
                dest: '<%= dirs.dist %>/images/sprite/sprite.png',
                destCss: '<%= dirs.dist %>/release/sprites.min.css'
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        cwd: 'src/images/',
                        src: [
                            '*.{jpg,png,svg}',
                            '**'
                        ],
                        dest: '<%= dirs.dist %>/images/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'src/icons/',
                        src: ['**'],
                        dest: '<%= dirs.dist %>/icons/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'src/fonts/',
                        src: ['**'],
                        dest: '<%= dirs.dist %>/fonts/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'src/styles/plugins/fontawesome-free/',
                        src: ['**'],
                        dest: '<%= dirs.dist %>/plugins/fontawesome-free/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'src/styles/js/data/',
                        src: ['**'],
                        dest: '<%= dirs.dist %>/release/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'node_modules/plyr/dist/',
                        src: ['**'],
                        dest: '<%= dirs.dist %>/plugins/plyr/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'node_modules/html2canvas/dist/',
                        src: [
                            '*.{js,map}',
                        ],
                        dest: '<%= dirs.dist %>/plugins/html2canvas/',
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        cwd: 'node_modules/file-saver/dist/',
                        src: [
                            '*.{js,map}',
                        ],
                        dest: '<%= dirs.dist %>/plugins/file-saver/',
                        filter: 'isFile'
                    }
                ],
            },
        },
        watch: {
            options: {
                livereload: true,
                spawn: false
            },
            // pug: {
            //     files: [
            //         '<%= dirs.html %>/*.pug',
            //         '<%= dirs.html %>/*/*.pug',
            //         '<%= dirs.html %>/*/*/*.pug'],
            //     tasks: ['pug']
            // },
            sass: {
                files: [
                    '<%= dirs.css %>/*.scss',
                    '<%= dirs.css %>/*/*.scss',
                    '<%= dirs.css %>/*/*/*.scss'],
                tasks: ['sass', 'autoprefixer']
            },
            cssmin: {
                files: [
                    'src/icons/*.css',
                    '<%= dirs.css %>/*.scss',
                    '<%= dirs.css %>/*/*.scss',
                    '<%= dirs.css %>/*/*/*.scss'],
                tasks: ['cssmin']
            },
            babel: {
                files: [
                    '<%= dirs.js %>/*.js',
                    '<%= dirs.js %>/pages/*.js',
                    '<%= dirs.js %>/components/*.js'],
                tasks: ['babel']
            },
            uglify: {
                files: [
                    '<%= dirs.js %>/*.js',
                    '<%= dirs.js %>/pages/*.js',
                    '<%= dirs.js %>/components/*.js'],
                tasks: ['uglify']
            },
            clean: ['<%= dirs.dist %>/images/', '<%= dirs.dist %>/icons/', '<%= dirs.dist %>/fonts/'],
            copy: {
                files: ['src/images/*', 'src/images/*/*.*', 'src/icons/*.*', 'src/fonts/*.*'],
                tasks: ['copy']
            },
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: [
                        '<%= dirs.dist %>/release/*.css',
                        'dist/*.html',
                        '<%= dirs.dist %>/release/*.js',
                    ]
                },
                options: {
                    watchTask: true,
                    baseDir: './dist',
                    server: './dist'
                },
            }
        }

    });
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-babel');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-uglify-es');
    //grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-pug');
    grunt.loadNpmTasks('grunt-browser-sync');


    grunt.registerTask('release', ['clean', 'sass', 'autoprefixer', 'babel', 'uglify', 'cssmin', 'sprite', 'copy']);
    grunt.registerTask('build', ['clean', 'sass', 'autoprefixer', 'babel', 'uglify', 'cssmin']);
    grunt.registerTask('sprite ', ['sprite']);
    grunt.registerTask('copy ', ['copy']);
    grunt.registerTask('default', ['browserSync', 'watch']);
};