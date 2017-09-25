console.log(__dirname);
this
		$( function() {

				var socket = io.connect();

				var $messageForm 	= $( '#messageForm' );
				var $message 		= $( '#message' );
				var $chat 			= $( '#chat' );

				var $messageArea 	= $( '#messageArea' );

				var $userFormArea 	= $( '#userFormArea' );
				var $userForm 		= $( '#userForm' );
				var $users 			= $( '#users' );
				var $username 		= $( '#username' );

				$messageForm.submit(
				                    	function( event ) {
											event.preventDefault();
											socket.emit(
											            	'send message',
															$message.val()
											            );
											$message.val('');
										}
								);

				socket.on(
							'new message',
							function ( data ) {
								$chat.append( '<div class="well" > <strong>' + data.user + '</strong> ' + data.message + '</div>' );
							}
						);

				$userForm.submit(
			                    	function( event ) {
										event.preventDefault();
										socket.emit(
														'new user',
														$username.val(),
														function ( data ) {
															console.log( data );
															if ( data )
															{
																$userFormArea.hide();
																$messageArea.show();
															}
														}
										            );
										$username.val('');
									}
								);

				socket.on(
				          	'get users',
				          	function ( data ) {

								var html = '';
								for ( var i = data.length - 1; i >= 0; i--)
								{
									html += '<li class="list-group-item">' + data[ i ] + '</li>'
								}

								$users.html( html );

							}
						)
		} );
