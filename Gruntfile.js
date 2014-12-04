'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);

    // configurable paths
    var yeomanConfig = {
        app: 'sources',
        dist: 'resources'
    };

    try {
        yeomanConfig.app = require('./bower.json').appPath || yeomanConfig.app;
    } catch (e) {
    }

    grunt.initConfig({
        yeoman: yeomanConfig,
        watch: {
            styles: {
                files: ['<%= yeoman.app %>/sass/{,*/}*.scss'],
                tasks: ['compass', 'autoprefixer']
            }
        },
        autoprefixer: {
            options: ['last 1 version'],
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= yeoman.dist %>/styles',
                        src: '{,*/}*.css',
                        dest: '<%= yeoman.dist %>/styles'
                    }
                ]
            }
        },
       concat:{
       	dist:{
            files:{
                '<%=yeoman.dist %>/scripts/main.js':[
                    '<%=yeoman.app %>/js/jquery.min.js',
                    '<%=yeoman.app %>/js/slidebars.min.js',
                    '<%=yeoman.app %>/js/jquery.glide.min.js',
                    '<%=yeoman.app %>/js/ebscohostsearch.js',
                    '<%=yeoman.app %>/js/main.js'],
                '<%=yeoman.dist %>/scripts/ie.js':[
                    '<%=yeoman.app %>/js/es5-shim.min.js',
                    '<%=yeoman.app %>/js/json3.min.js']    
            }
       		
       		
       	}
       },
        clean: {
            dist: {
                files: [
                    {
                        dot: true,
                        src: [
                            '.tmp',
                            '<%= yeoman.dist %>/*',
                            '!<%= yeoman.dist %>/.git*'
                        ]
                    }
                ]
            },
            server: '.tmp'
        },
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                '<%= yeoman.app %>/scripts/{,*/}*.js'
            ]
        },
        imagemin: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= yeoman.app %>/images',
                        src: '{,*/}*.{png,jpg,jpeg}',
                        dest: '<%= yeoman.dist %>/images'
                    }
                ]
            }
        },
        svgmin: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= yeoman.app %>/images',
                        src: '{,*/}*.svg',
                        dest: '<%= yeoman.dist %>/images'
                    }
                ]
            }
        },
        uglify: {
            options:{
                mangle:false,
                compress:true,
                sourceMap:true
            },
            dist: {
               files: {
                    '<%= yeoman.dist %>/scripts/main.js': [
                        '<%= yeoman.dist %>/scripts/main.js'
                    ]
                }
            }
        },
        compass:{
        	dist:{
        		options:{
        			sassDir:'<%=yeoman.app%>/sass',
        			cssDir:'<%=yeoman.dist%>/styles',
        			imagesDir:'<%=yeoman.dist%>/images',
        			outputStyle:'compressed'
        		}
        	}
        },
        copy:{
            dist:{
                files:[
                    {
                        expand:true,
                        src:['**'],
                        cwd:'<%=yeoman.app%>/images/',
                        dest:'<%=yeoman.dist%>/images/',

                    },{
                        expand:true,
                        src:['modernizr.custom.js'],
                        cwd:'<%=yeoman.app%>/js/',
                        dest:'<%=yeoman.dist%>/scripts'
                    },{
                        expand:true,
                        src:['Reglamento SIBIB.docx'],
                        cwd:'<%=yeoman.app%>',
                        dest:'<%=yeoman.dist%>'
                    }
                ]
            }
        }
    });

    grunt.registerTask('build', [
        'clean:dist',
        'compass',
        'autoprefixer',
        'concat',
        'uglify',
        // 'imagemin'
        'copy'
        
    ]);

    grunt.registerTask('default', [
        'clean:dist',
        'compass',
        'autoprefixer',
        'concat',
        'uglify'
    ]);
};
