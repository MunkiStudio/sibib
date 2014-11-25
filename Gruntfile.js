'use strict';
var LIVERELOAD_PORT = 35729;
var lrSnippet = require('connect-livereload')({ port: LIVERELOAD_PORT });
var mountFolder = function (connect, dir) {
    return connect.static(require('path').resolve(dir));
};

//create proxy for grunt server
var proxySnippet = require('grunt-connect-proxy/lib/utils').proxyRequest;

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
       		src:'<%=yeoman.app %>/js/*.js',
       		dest:'<%=yeoman.dist %>/scripts/main.js'
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
        			sourceMap:true,
        			imagesDir:'<%=yeoman.dist%>/images',
        			outputStyle:'compressed'
        		}
        	}
        }
    });

    grunt.registerTask('build', [
        'clean:dist',
        'compass',
        'autoprefixer',
        'concat',
        'uglify'
        
    ]);

    grunt.registerTask('default', [
        'clean:dist',
        'compass',
        'autoprefixer',
        'concat',
        'uglify'
    ]);
};
