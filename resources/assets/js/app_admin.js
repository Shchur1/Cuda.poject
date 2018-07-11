'use strict';
/* global window: false */
/* global document: false */
/* global screen: false */
var app = {};
var CURRENT_URL_NO_PARAMS = window.location.href;
var CURRENT_URL_NO_PARAMS = CURRENT_URL_NO_PARAMS.substr( 0, CURRENT_URL_NO_PARAMS.indexOf( "?" ) );

/**
 * Detect user device
 * @returns {*}
 */
function getMobileOperatingSystem() {
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;

	// Windows Phone must come first because its UA also contains "Android"
	if ( /windows phone/i.test( userAgent ) ) {
		return 'Windows Phone';
	}

	if ( /android/i.test( userAgent ) ) {
		return 'Android';
	}

	// iOS detection from: http://stackoverflow.com/a/9039885/177710
	if ( /iPad|iPhone|iPod/.test( userAgent ) && !window.MSStream ) {
		return 'iOS';
	}

	return 'unknown';
}

var getUrlParameter = function getUrlParameter( sParam ) {
	var sPageURL = decodeURIComponent( window.location.search.substring( 1 ) ),
		sURLVariables = sPageURL.split( '&' ),
		sParameterName,
		i;

	for ( i = 0; i < sURLVariables.length; i++ ) {
		sParameterName = sURLVariables[ i ].split( '=' );

		if ( sParameterName[ 0 ] === sParam ) {
			return sParameterName[ 1 ] === undefined ? true : sParameterName[ 1 ];
		}
	}
};

function openModal( modal ) {
	$( '#overlay' ).addClass( 'active' );
	$( '#' + modal ).addClass( 'active' );
}

function string_to_slug( str ) {
	str = str.replace( /^\s+|\s+$/g, '' ); // trim
	str = str.toLowerCase();

	// remove accents, swap ñ for n, etc
	var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
	var to = "aaaaeeeeiiiioooouuuunc------";
	for ( var i = 0, l = from.length; i < l; i++ ) {
		str = str.replace( new RegExp( from.charAt( i ), 'g' ), to.charAt( i ) );
	}

	str = str.replace( /[^a-z0-9 -]/g, '' ) // remove invalid chars
	.replace( /\s+/g, '-' ) // collapse whitespace and replace by -
	.replace( /-+/g, '-' ); // collapse dashes

	return str;
}

app.ui = {
	disableDragging : function() {
		$( 'img, a' ).on( 'dragstart', function( event ) {
			event.preventDefault();
		} );
	},
	filterAdmin : function() {
		var urlSort = getUrlParameter( 'sort' );
		var urlFilter = getUrlParameter( 'filter' );
		var urlSearch = getUrlParameter( 'search' );
		if ( urlSearch ) {
			$( '#js-admin-search-input' ).attr( 'value', urlSearch );
		}
		if ( urlFilter ) {
			$( '.js-admin-filter' ).each( function() {
				if ( $( this ).data( 'filter' ) === urlFilter ) {
					$( this ).find( '.js-admin-filter-icon' ).removeClass( 'u-hidden' );
				}
			} );
		}
		if ( urlSort ) {
			$( '.js-admin-filter' ).each( function() {
				if ( urlSort === 'desc' ) {
					$( this ).find( '.js-admin-filter-icon' ).removeClass( 'el-chevron-up' ).addClass( 'el-chevron-down' );
				} else if ( urlSort === 'asc' ) {
					$( this ).find( '.js-admin-filter-icon' ).removeClass( 'el-chevron-down' ).addClass( 'el-chevron-up' );
				} else {
					$( this ).find( '.js-admin-filter-icon' ).removeClass( 'el-chevron-up' ).addClass( 'el-chevron-down' );
				}
			} );
		}
		// Click on filter item
		$( '.js-admin-filter' ).click( function() {
			var filter = $( this ).data( 'filter' );
			$( '.js-admin-filter' ).not( this ).find( '.js-admin-filter-icon' ).addClass( 'u-hidden' );
			$( this ).find( '.js-admin-filter-icon' ).removeClass( 'u-hidden' );
			if ( urlSort && urlSearch ) {
				if ( urlFilter === filter ) {
					if ( urlSort === 'desc' ) {
						window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&search=' + urlSearch + '&sort=asc';
					} else {
						window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&search=' + urlSearch + '&sort=desc';
					}
				} else {
					window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&search=' + urlSearch + '&sort=desc';
				}
			} else if ( urlSort ) {
				if ( urlFilter === filter ) {
					if ( urlSort === 'desc' ) {
						window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&sort=asc';
					} else {
						window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&sort=desc';
					}
				} else {
					window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&sort=desc';
				}
			} else if ( urlSearch ) {
				window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&search=' + urlSearch + '&sort=desc';
			} else {
				window.location.href = CURRENT_URL_NO_PARAMS + '?filter=' + filter + '&sort=desc';
			}
		} );
		// Search input
		$( '#js-admin-search' ).on( 'submit', function() {
			var searchValue = $( this ).find( '#js-admin-search-input' ).val();
			window.location.href = CURRENT_URL_NO_PARAMS + '?search=' + searchValue + '&filter=created_at&sort=desc';
			return false;
		} );
		// Clear search
		$( '#js-admin-search-reset' ).on( 'click', function() {
			window.location.href = CURRENT_URL_NO_PARAMS;
			return false;
		} );
	},
	svgConvert : function() {
		$( 'img.svg' ).each( function() {
			var $img = $( this );
			var imgID = $img.attr( 'id' );
			var imgClass = $img.attr( 'class' );
			var imgURL = $img.attr( 'src' );
			$.get( imgURL, function( data ) {
				// Get the SVG tag, ignore the rest
				var $svg = $( data ).find( 'svg' );
				// Add replaced image's ID to the new SVG
				if ( typeof imgID !== 'undefined' ) {
					$svg = $svg.attr( 'id', imgID );
				}
				// Add replaced image's classes to the new SVG
				if ( typeof imgClass !== 'undefined' ) {
					$svg = $svg.attr( 'class', imgClass + ' replaced-svg' );
				}
				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr( 'xmlns:a' );
				// Replace image with new SVG
				$img.replaceWith( $svg );
			}, 'xml' );
		} );
	},
	toggleContent : function() {
		if ( localStorage.getItem( 'nav-is-open' ) != null ) {
			if ( localStorage.getItem( 'nav-is-open' ) === 'true' ) {
				$( '.js-toggle-content' ).addClass( 'active' );
				$( 'body' ).addClass( 'nav-is-open' );
			} else if ( localStorage.getItem( 'nav-is-open' ) === 'false' ) {
				$( '.js-toggle-content' ).removeClass( 'active' );
				$( 'body' ).removeClass( 'nav-is-open' );
			}
		}
		$( '.js-toggle-content' ).click( function() {
			if ( localStorage.getItem( 'nav-is-open' ) != null ) {
				if ( localStorage.getItem( 'nav-is-open' ) === 'true' ) {
					localStorage.setItem( 'nav-is-open', false );
					$( 'body' ).removeClass( 'nav-is-open' );
					$( this ).removeClass( 'active' );
				} else if ( localStorage.getItem( 'nav-is-open' ) === 'false' ) {
					localStorage.setItem( 'nav-is-open', true );
					$( 'body' ).addClass( 'nav-is-open' );
					$( this ).addClass( 'active' );
				}
			} else {
				$( 'body' ).addClass( 'nav-is-open' );
				$( this ).addClass( 'active' );
				localStorage.setItem( 'nav-is-open', true );
			}
			return false;
		} );
	},
	modalClose : function() {
		$( '#overlay' ).click( function() {
			$( this ).removeClass( 'active' );
			$( '.modal' ).each( function() {
				$( this ).removeClass( 'active' );
			} );
			return false;
		} );
	}
};

app.post = {
	removeThumbnail : function() {
		$( '#js-remove-thumbnail' ).click( function() {
			$( '#thumbnail-stub' ).removeClass( 'hidden' );
			$( '#thumbnail-holder-wrapper' ).removeClass( 'active' );
			$( '#thumbnail-holder' ).attr( 'src', '' );
			$( '#thumbnail-input' ).val( '' ).trigger( 'change' );
			$( this ).removeClass( 'active' );
			return false;
		} );
	},
	isVideoPost : function() {
		$( '.js-video-switch' ).lc_switch();

		// triggered each time a field changes status
		$( 'body' ).delegate( '.lcs_check', 'lcs-statuschange', function() {
			var status = ($( this ).is( ':checked' )) ? 'checked' : 'unchecked';
			if ( status === 'checked' ) {
				$( '#video_link' ).attr( 'required', true );
				$( this ).closest( '.form-group' ).next( '.form-group' ).removeClass( 'hidden' );
			} else {
				// $('#video_url').removeAttr('required');
				$( '#video_link' ).val( '' );
				$( this ).closest( '.form-group' ).next( '.form-group' ).addClass( 'hidden' );
			}
		} );

		// triggered each time a field is checked
		$( 'body' ).delegate( '.lcs_check', 'lcs-on', function() {
		} );

		// triggered each time a is unchecked
		$( 'body' ).delegate( '.lcs_check', 'lcs-off', function() {
		} );
	},
	generateSlug : function() {
		$( '.js-input-title' ).on( 'input', function() {
			var value = string_to_slug($( this ).val());
			$( '.js-input-slug' ).val(value);
		} );
		$( '.js-input-slug' ).on( 'paste keydown', function() {
			var value = string_to_slug($( this ).val());
			$(this).val(value);
		} );
	}
};

$( function() {
	localStorage.removeItem( 'is_thumbnail_upload' );
	// UI
	app.ui.disableDragging();
	app.ui.filterAdmin();
	app.ui.svgConvert();
	app.ui.toggleContent();
	app.ui.modalClose();
	// Post
	app.post.removeThumbnail();
	app.post.isVideoPost();
	app.post.generateSlug();
} );

$( window ).on( 'resize', function() {

} );

$( window ).on( 'orientationchange', function() {

} );
