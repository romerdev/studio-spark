<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
    SimpleRouter::get( '/home', 'WebsiteController@home' )->name( 'home' );
    SimpleRouter::get( '/about', 'WebsiteController@about' )->name( 'about' );

    SimpleRouter::get( '/diensten', 'WebsiteController@diensten' )->name( 'diensten' );
    SimpleRouter::get( '/diensten/digitaal', 'WebsiteController@dienstendigitaal' )->name( 'diensten.digitaal' );
    SimpleRouter::get( '/diensten/analoog', 'WebsiteController@dienstenanaloog' )->name( 'diensten.analoog' );

    SimpleRouter::get( '/portfolio', 'WebsiteController@portfolio' )->name( 'portfolio' );
    SimpleRouter::get( '/portfolio/instagram-campagne', 'WebsiteController@portfolioinstagram' )->name( 'portfolio.instagram' );

    SimpleRouter::get( '/contact', 'ContactController@showContactForm' )->name( 'contact.show' );
    SimpleRouter::post( '/contact/send', 'ContactController@handleContactForm' )->name( 'contact.handle' );

    // STOP: Tot hier al je eigen URL's zetten
	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );

