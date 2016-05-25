var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
//    mix.sass('app.scss');
	
	 mix.styles([
	             'bootstrap/bootstrap.css',
	             'mycss/select2.css',
	             'mycss/sweetalert.css',
	             'mycss/app.css',
	          ],'public/css/final.css','resources/assets/sass/css');
	         
	 //home page css 
	 mix.styles(['mycss/grayscale.css'
	             ],'public/css/grayscale.css','resources/assets/sass/css');
	 //home page js
	 mix.scripts([
	              'dropzone/dropzone.js'
	     	],'public/js/dropzone.js','resources/assets/sass/js');
	        
	 mix.scripts([
	              'theme/grayscale.js',
	              'theme/jquery.easing.min.js'
	     	],'public/js/theme.js','resources/assets/sass/js');
	         
	         
     //admin-LTE
     mix.styles([
                'AdminLTE.css',
                'skins/skin-blue.min.css',
                ],'public/css/admin-master.css','resources/assets/sass/css/admin-lte/dist/css');
     
     //font and icons css file
     mix.styles([
                 'font-awesome.min.css',
                 'ionicons.min.css',
                 ],'public/lte/extend/font-icons.css','resources/assets/sass/css/admin-lte/font-icon');
     
     
     mix.scripts([
         'jquery/jquery.js',
         'bootstrap/bootstrap.min.js',
         'select2/select2.min.js',
         'sweetalert-dev.js',
      ],'public/js/final.js','resources/assets/sass/js');
     
     
     mix.scripts([
          'pubsub.js',
          'ajax-helper.js',
          'app.js',
 	],'public/js/app.js','resources/assets/sass/js');
     
    mix.version('public/css/final.css');
	
	
});
