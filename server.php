<?php

	// ini_set('error_reporting', E_ALL ^ E_NOTICE);
	// ini_set('display_errors', 1);


	set_time_limit(0);


	$ip_add 	= "127.0.0.1";//$_SERVER[ 'REMOTE_ADDR' ];
	$port 		= 8000;//$_SERVER[ 'REMOTE_PORT' ];//

	echo $ip_add.' : '.$port."\n\n";

	if ( ! $socket = socket_create( AF_INET, SOCK_STREAM, 0 ) ) {
		show_error( $socket );
		// die();
	}
	echo "Socket protocol was set. ".$socket."\n\n";

	if ( ! socket_bind( $socket, $ip_add, $port ) ) {
		show_error( $socket );
		// die();
	}
	echo "Socket bound to port. \n\n";

	echo $ip_add.' : '.$port.' : '.$socket."\n\n";

	if ( ! socket_listen( $socket ) ) {
		show_error( $socket );
		// die();
	}
	echo "Listening for connection . . . . \n\n";

	do
	{
		if ( ! $client = socket_accept( $socket ) ) {
			echo 'Cannot connect to '. $socket.' : '.$client;
			// show_error( $socket );
			die();
		}
		echo "New connection established. ".$socket.' : '.$client."\n\n";

		$message = "Connection ok..";
		if ( ! socket_write( $socket, $message ) ) {
			show_error( $socket );
		}

		do
		{
			if ( ! $message_client = socket_read( $socket, 2048, PHP_NORMAL_READ ) ) {
				show_error( $socket );
				// break;
			}

			$message_user = "Input passed";
			socket_write( $socket, $message_user, strlen( $message_user ) );

			if ( ! $message_client == trim( $message_client ) ) {
				continue;
			}

			if ( $message_client == "close" )
			{
				socket_close( $socket );

				echo "\n\n-----------------------------------------\n";
				echo "The user has left the connection. \n";

				break 2;
			}
		}
		while ( true );

	}
	while ( true );

	echo "Ending socket";
	socket_close( $socket );

	function show_error( $socket = null )
	{
		$error_code 	= socket_last_error( $socket );
		$error_message 	= socket_strerror( $error_code );

		die( "Couldn't create a socket: [$error_code] : $error_message" );
	}

// ini_set('error_reporting', E_ALL ^ E_NOTICE);
// ini_set('display_errors', 1);

// // Set time limit to indefinite execution
// set_time_limit (0);

// // Set the ip and port we will listen on
// $address = '127.0.0.1';
// $port = 8000;

// // Create a TCP Stream socket
// $sock = socket_create(AF_INET, SOCK_STREAM, 0);

// // Bind the socket to an address/port
// socket_bind($sock, $address, $port) or die('Could not bind to address');

// // Start listening for connections
// socket_listen($sock);

// // Non block socket type
// socket_set_nonblock($sock);

// // Loop continuously
// while (true)
// {
//     unset($read);

//     $j = 0;

//     if (count($client))
//     {
//         foreach ($client AS $k => $v)
//         {
//             $read[$j] = $v;

//             $j++;
//         }
//     }

//     $client = $read;

//     if ($newsock = @socket_accept($sock))
//     {
//         if (is_resource($newsock))
//         {
//             socket_write($newsock, "$j>", 2).chr(0);

//             echo "New client connected $j";

//             $client[$j] = $newsock;

//             $j++;
//         }
//     }

//     if (count($client))
//     {
//         foreach ($client AS $k => $v)
//         {
//             if (@socket_recv($v, $string, 1024, MSG_DONTWAIT) === 0)
//             {
//                 unset($client[$k]);

//                 socket_close($v);
//             }
//             else
//             {
//                 if ($string)
//                 {
//                     echo "$k: $string\n";
//                 }
//             }
//         }
//     }

//     //echo ".";

//     sleep(1);
// }

// // Close the master sockets
// socket_close($sock);
