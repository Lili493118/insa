module.exports = function(grunt) {
grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
        options: {
          separator: ';',
        },
        dist: {
          src: ['./js/*.js'],
          dest: 'dist/build.js',
        },
      },

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'dist/build.js',
        dest: 'dist/output.js'
      }},
      watch: {
        scripts: {
            files: ['js/*.js', 'dist/*.js', 'Gruntfile.js'],
            tasks: ['concat', 'uglify'],
        },
        options:{
        reload: true
        }
        
    },
    
  });
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default',['concat','uglify']);
  grunt.registerTask('default',['watch']);

}

