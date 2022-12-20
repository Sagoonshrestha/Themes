// ( function( $ ) {
// //  console.log(wp.customize.control('blogname').setting);
// // wp.customize.control( 'my_theme[button_id]', function( customize ) {
// // 	var control = new wp.customize.ColorControl( 'favorite_color', {
// // 		params: {
// // 			type: 'color',
// // 			content: '<li class="customize-control customize-control-color"></li>',
// // 			priority: 10,
// // 			active: true,
// // 			section: 'colors',
// // 			label: 'Favorite Color',
// // 			settings: { 'default': 'favorite_color' },
// // 		}
// // 	} );
// // 	console.log(customize);
// //     customize.container.find( '.button' ).on( 'click', function() {
// //         console.info( 'Button was clicked.' );
// // 		customize.add( 'favorite_color', control) 


// // 	} );
// // } );
// debugger;
// (function($){
// 	debugger;
// 		$('body').on('click','#_customize-input-my_theme[button_id]',function(){
// 			console.log('customizer');
// 			var control = new wp.customize.ColorControl( 'favorite_color', {
// 				section: 'colors',
// 				label: 'Favorite Color',
// 				settings: { 'default': 'favorite_color' },
// 			} );
// 			wp.customize.control.add( control );
// 		})
// } )( jQuery );
jQuery(document).ready(function(e) {
	// console.log(document.readyState);
	
	    jQuery('body').on('click','#_customize-input-my_theme[button_id]',function(){
			console.log('customizer');
			var control = new wp.customize.ColorControl( 'favorite_color', {
				section: 'colors',
				label: 'Favorite Color',
				settings: { 'default': 'favorite_color' },
			} );
			wp.customize.control.add( control );
		})
	  
});
		
		// $ajax({
		// 		type: 'post',
		// 		url: ajaxUrl,
		// 		data: {
		// 			action: 'customtheme_front_form_submit_action',
		// 			nonce: customtheme_object.nonce,
		// 		},
		// 		success: function(response) {
		// 			console.log(response);
		// 		} 
		// })
		// debugger;
		// control.section.bind(
			// new wp.customize.Section("siteTitleColorSection", {
			// 	title: "Site Title Color Section",
			// 	customizeAction: "Customizing ▸ Site Title Color", // String above title's Section.
			// 	priority: 5, // The order of this section in the panel.
			// })
		// 	// new wp.customize.Setting("siteTitleColorSetting", "#fff", {
		// 	// 	transport: "postMessage",
		// 	// })
		// )
		// control.bind(
		// 	new wp.customize.ColorControl("siteTitleColorControl", {
		// 		section: "siteTitleColorSection",
		// 		label: "Site Title Color Control",
		// 		setting: "siteTitleColorSetting",
		// 		priority: 5, // The order of this control in the section.
		// 	})
		// )
 
// ( function( $ ) {
//     console.log(wp.customize('blogname'));

// 	// Update the site title in real time...
// 	wp.customize( 'blogname', function( value ) {
//         console.log(value);
// 		value.bind( function( newval ) {
//             console.log(newval);
// 			$( '#site-title a' ).html( newval );
// 		} );
// 	} );
// 	console.log(wp);
// 	//Update the site description in real time...
// 	wp.customize( 'blogdescription', function( value ) {
// 		value.bind( function( newval ) {
//             console.log(newval);
// 			$( '.site-description' ).html( newval );
// 		} );
// 	} );

// 	//Update site title color in real time...
// // 	wp.customize( 'header_textcolor', function( value ) {
// // 		value.bind( function( newval ) {
// // 			$('#site-title a').css('color', newval );
// // 		} );
// // 	} );

// // 	//Update site background color...
// // 	wp.customize( 'background_color', function( value ) {
// // 		value.bind( function( newval ) {
// // 			$('body').css('background-color', newval );
// // 		} );
// // 	} );
	
// // 	//Update site link color in real time...
// // 	wp.customize( 'link_textcolor', function( value ) {
// // 		value.bind( function( newval ) {
// // 			$('a').css('color', newval );
// // 		} );
// // 	} );
// // } )( jQuery );
// // ( function( $, api ) {
// // 	$( function() {
// // 		// Make it possible to reset the color based on a radio input's value.
// // 		// `active` can be either `custom` or `default`.
// // 		console.log(api.control('button_id').section());
// // 		api.control( 'accent_hue_active' ).setting.bind( function( active ) {
// // 			var control = api.control( 'accent_hue' ); // Get the accent hue control.

			
// // 		} );
// // 	} );
// // }( jQuery, wp.customize ) );
// (function($){
// 	var a='my_theme_experience_settings';
// 	wp.customize.control('my_theme[button_id]', function( control ) {
// 		control.container.find( '.button' ).on( 'click', function() {
// 			console.info( 'Button was clicked.' );
// 			wp.customize.section.add(
// 				new api.Section('hannover_example_section', {
// 					title: 'Example Section',
// 					customizeAction: 'Customizing ▸ Theme Options'
// 				})
// 			);
// 			var setting = new wp.customize.Setting( 'favorite_color', '#000000', {
// 				transport: 'refresh',
// 				previewer: wp.customize.previewer
// 			} );
// 			wp.customize.add( 'favorite_color', setting );
// 			var control1 = new wp.customize.ColorControl( 'favorite_color', {
// 				section: a,
// 				label: 'Favorite Color',
// 				setting: 'favarite_color',
// 			} );
// 			console.log(wp.customize.control.add( control1 ));
// 			wp.customize.control.add( control1 );
// 		} );
// 	} );
// })(jQuery);
