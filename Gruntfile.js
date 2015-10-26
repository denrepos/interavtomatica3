module.exports = function(grunt) {

	  grunt.initConfig({
		sprite:{
		  all: {
			src: 'images/sprites/*.png',
			dest: 'images/spritesheet.png',
			destCss: 'css/sprites.css'
		  }
		}
	  });
	  
	grunt.loadNpmTasks('grunt-spritesmith');
	
};