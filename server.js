

	var express = require( 'express' );
	// var mysql 	= require( 'mysql' );
	console.log( express );

	var app 	= express();
	var server 	= require( 'http' ).createServer( app );
	var io 		= require( 'socket.io' ).listen( server );

	users 		= [];
	connections = [];

	server.listen( process.env.PORT || 3000 );
	console.log( 'Server running....' );

	app.get(
				'/',
				function( request, response ) {
					response.sendFile( __dirname + '/index.html' );
				}
		);

	io.sockets
		.on(
				'connection',
				function ( socket ) {
					connections.push( socket );
					console.log(
									'Connected: %s sockets connected',
									connections.length
								);

					// Disconnect
					socket.on(
								'disconnect',
								function ( data ) {
									// if ( !socket.username )
										// return;

									users.splice( users.indexOf(
									                            	socket.usename,
									                            	1
																)
												);

									updateUsernames();
									connections.splice(
															connections.indexOf( socket ),
															1
													);
									console.log(
													'Disconnected: %s sockets connected',
													connections.length
												);
								}
							);

					// Send Message
					socket.on(
								'send message',
								function ( data ) {
									io.sockets
										.emit(
												'new message',
												{
													message: 	data,
													user: 		socket.username
												}
											)
								}
							);

					// New User
					socket.on(
								'new user',
								function ( data, callback ) {
									callback( true );
									socket.username = data;
									users.push( socket.username );
									updateUsernames();
								}
							);

					function updateUsernames () {
						io.sockets.emit(
						               	'get users',
						               	users
									);
						// body...
					}

				}
			);

//
	// var connect = mysql.createConnection( {
	// 	// properties...
	// 	host: 'localhost',
	// 	user: 'root',
	// 	password: '',
	// 	database: 'db_annoncement'
	// } );

	// connection.connect( function ( error ) {
	// 	if(!!error){
	// 		console.log('Error');
	// 	}
	// 	else {
	// 		console.log('Connected');
	// 	}
	// } );

	// app.get('/', function (request, response) {
	// 	// connection.query("SELECT * FROM db_announcement", function (error, rows, fields) {
	// 		// if(!!error){
	// 		// 	console.log('Error in the query');
	// 		// }
	// 		// else {
	// 		// 	console.log('Successful query');
	// 		// }
	// 	// })
	// 	connection.getConnection( function (error, tempCont) {
	// 		if(!!error){
	// 			tempCont.release();
	// 			console.log('Error');
	// 		}
	// 		else {
	// 			console.log('Connected');

	// 			tempCont.query( "SELECT * FROM tblannouncements", function (error, rows, fields) {
	// 				tempCont.release();
	// 				if (!!error) {
	// 					console.log('Error in the query');
	// 				}
	// 				else{
	// 					resp.json(rows);

	// 				}
	// 			} )
	// 		}
	// 	} );
	// } );

//
