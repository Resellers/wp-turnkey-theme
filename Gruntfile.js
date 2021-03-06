/* global module, require */

module.exports = function( grunt ) {
	'use strict';

	var pkg = grunt.file.readJSON( 'package.json' );
	var sass = require( 'node-sass' );

	grunt.initConfig( {

		pkg: pkg,

		autoprefixer: {
			options: {
				browsers: [
					'Android >= 2.1',
					'Chrome >= 21',
					'Edge >= 12',
					'Explorer >= 7',
					'Firefox >= 17',
					'Opera >= 12.1',
					'Safari >= 6.0'
				],
				cascade: false
			},
			editor: {
				src: ['editor-style.css']
			},
			main: {
				src: ['style.css']
			}
		},

		clean: {
			options: {
				force: true
			},
			build: ['build/']
		},

		copy: {
			build: {
				expand: true,
				cwd: '.',
				src: [
					'*.css',
					'*.php',
					'*.txt',
					'screenshot.png',
					'assets/**',
					'inc/**',
					'templates/**',
					'languages/*.{mo,pot}',
				],
				dest: 'build/'
			},
		},

		cssjanus: {
			theme: {
				options: {
					swapLtrRtlInUrl: false
				},
				files: [
					{
						src: 'style.css',
						dest: 'style-rtl.css'
					},
					{
						src: 'editor-style.css',
						dest: 'editor-style-rtl.css'
					}
				]
			}
		},

		devUpdate: {
			packages: {
				options: {
					updateType: 'force'
				}
			}
		},

		imagemin: {
			options: {
				optimizationLevel: 3
			},
			assets: {
				expand: true,
				cwd: 'assets/images/',
				src: ['**/*.{gif,jpeg,jpg,png,svg}'],
				dest: 'assets/images/'
			},
			screenshot: {
				files: {
					'screenshot.png': 'screenshot.png'
				}
			}
		},

		jshint: {
			assets: ['assets/js/**/*.js', '!assets/js/**/*.min.js'],
			gruntfile: ['Gruntfile.js']
		},

		makepot: {
			target: {
				options: {
					domainPath: 'languages/',
					include: ['functions.php', 'inc/.+.php', 'templates/.+.php'],
					mainFile: 'functions.php',
					potComments: 'Copyright (c) {year} All Rights Reserved.',
					potFilename: pkg.name + '.pot',
					potHeaders: {
						'x-poedit-keywordslist': true
					},
					processPot: function( pot, options ) {
						pot.headers['report-msgid-bugs-to'] = pkg.bugs.url;
						return pot;
					},
					type: 'wp-plugin',
					updatePoFiles: true
				}
			}
		},

		potomo: {
			files: {
				expand: true,
				cwd: 'languages/',
				src: ['*.po'],
				dest: 'languages/',
				ext: '.mo'
			}
		},

		replace: {
			charset: {
				overwrite: true,
				replacements: [
					{
						from: /^@charset "UTF-8";\n/,
						to: ''
					}
				],
				src: ['style*.css']
			},
			php: {
				overwrite: true,
				replacements: [
					{
						from: /Version:(\s*?)[a-zA-Z0-9\.\-\+]+$/m,
						to: 'Version:$1' + pkg.version
					},
					{
						from: /@since(.*?)NEXT/mg,
						to: '@since$1' + pkg.version
					},
					{
						from: /@NEXT/g,
						to: '<%= pkg.version %>'
					},
					{
						from: /VERSION(\s*?)=(\s*?['"])[a-zA-Z0-9\.\-\+]+/mg,
						to: 'VERSION$1=$2' + pkg.version
					},
					{
						from: /'PRIMER_CHILD_VERSION', '[a-zA-Z0-9\.\-\+]+'/mg,
						to: '\'PRIMER_CHILD_VERSION\', \'' + pkg.version + '\''
					}
				],
				src: ['*.php', 'inc/**/*.php', 'templates/**/*.php']
			},
			readme: {
				overwrite: true,
				replacements: [
					{
						from: /Stable tag:(\s*)[\w.+-]+/,
						to: 'Stable tag:$1<%= pkg.version %>'
					}
				],
				src: ['readme.txt']
			},

			sass: {
				overwrite: true,
				replacements: [
					{
						from: /Version:(\s*)[\w.+-]+/,
						to: 'Version:$1<%= pkg.version %>'
					}
				],
				src: ['.dev/sass/**/*.scss']
			}
		},

		sass: {
			options: {
				precision: 5,
				implementation: sass,
				sourceMap: false
			},
			editor: {
				files: {
					'editor-style.css': '.dev/sass/editor-style.scss'
				}
			},
			main: {
				files: {
					'style.css': '.dev/sass/style.scss'
				}
			}
		},

		uglify: {
			options: {
				ASCIIOnly: true,
				sourceMap: true
			},
			all: {
				expand: true,
				cwd: 'assets/js',
				src: ['**/*.js', '!**/*.min.js'],
				dest: 'assets/js/',
				ext: '.min.js'
			}
		},

		watch: {
			images: {
				files: 'assets/images/**/*.{gif,jpeg,jpg,png,svg}',
				tasks: ['imagemin']
			},
			sass: {
				files: '.dev/sass/**/*.scss',
				tasks: ['sass', 'autoprefixer', 'cssjanus']
			}
		},

		wp_deploy: {
			plugin: {
				options: {
					assets_dir: '.dev/wp-org-assets/',
					build_dir: 'build/',
					plugin_main_file: pkg.name + '.php',
					plugin_slug: pkg.name,
					svn_user: grunt.file.exists( 'svn-username' ) ? grunt.file.read( 'svn-username' ).trim() : false
				}
			}
		},

		wp_readme_to_markdown: {
			options: {
				post_convert: function( readme ) {
					var matches = readme.match( /\*\*Tags:\*\*(.*)\r?\n/ ),
					    tags = matches[1].trim().split( ', ' ),
					    section = matches[0];

					for ( var i = 0; i < tags.length; i++ ) {
						section = section.replace( tags[i], '[' + tags[i] + '](https://wordpress.org/themes/tags/' + tags[i] + '/)' );
					}

					// Tag links
					readme = readme.replace( matches[0], section );

					// Badges
					readme = readme.replace( '## Description ##', grunt.template.process( pkg.badges.join( ' ' ) ) + '  \r\n\r\n## Description ##' );

					// YouTube
					readme = readme.replace( /\[youtube\s+(?:https?:\/\/www\.youtube\.com\/watch\?v=|https?:\/\/youtu\.be\/)(.+?)\]/g, '[![Play video on YouTube](https://img.youtube.com/vi/$1/maxresdefault.jpg)](https://www.youtube.com/watch?v=$1)' );

					return readme;
				}
			},
			main: {
				files: {
					'readme.md': 'readme.txt'
				}
			}
		}

	} );

	require( 'matchdep' ).filterDev( 'grunt-*' ).forEach( grunt.loadNpmTasks );

	grunt.registerTask( 'default', ['sass', 'replace:charset', 'autoprefixer', 'cssjanus', 'jshint', 'imagemin', 'readme'] );
	grunt.registerTask( 'build', ['default', 'clean', 'copy'] );
	grunt.registerTask( 'check', ['devUpdate'] );
	grunt.registerTask( 'deploy',     [ 'build', 'wp_deploy', 'clean:build' ] );
	grunt.registerTask( 'readme', ['wp_readme_to_markdown'] );
	grunt.registerTask( 'update-mo', ['potomo'] );
	grunt.registerTask( 'update-pot', ['makepot'] );
	grunt.registerTask( 'version', ['replace', 'readme', 'build'] );
};
