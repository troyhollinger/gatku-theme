module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // uglify: {
        //     build: {
        //         src: 'production/app.js',
        //         dest: 'production/app.min.js'
        //     }
        // },
        sass: {
            dist: {
                options: {
                    style:'compressed'
                },
                files: {
                    'style.css' : 'style.scss',
                    'css/apparel.css' : 'css/apparel.scss',
                    'css/media.css' : 'css/media.scss'
                }
            }
        },
        // cssmin : {
        //     combine : {
        //         files : {
        //             'production/app.css' : ['css/style.css', 'css/reset.css']
        //         }
        //     }
        // },
        watch: {
            
            // scripts: {
            //     files: ['js/*.js'],
            //     tasks: ['concat', 'uglify'],
            //     options: {
            //         spawn: false
            //     }
            // },
            css : {
                files : ['css/*.scss', '*.scss'],
                tasks : ['sass'],
                options : {
                    spawn : false
                }
            }
        }


    });

    
    // grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    // grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['sass', 'watch']);

};