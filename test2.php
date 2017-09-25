<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
	</head>
	<body>

		<?php echo gethostname();

		?>


		<script src="https://code.jquery.com/jquery-3.2.1.js"
				integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
				crossorigin="anonymous"></script>

		<script>
			'use strict';
			// function b () {
	  //           // myVar;
	  //           console.log(myVar);
	  //       }

	  //       function a () {
	  //           var myVar = 2;
	  //           console.log(myVar);
	  //           b();
	  //       }

	  //       var myVar = 1;
	  //       console.log(myVar);
	  //       a();

	  //       var english = 	{
	  //       					greetings : {
	  //       									greet: 'Hello'
	  //       								}
	  //       				};

	  //       console.log( english );


	   //      ;(function( Admin ){

				// Admin.module = {};

	   //      })( window.Admin = window.Admin || {} );

	   		/* Not working */
	        ( function( $ ){

    	        var Admin = function () {
    	        				return {};
    	        			};

	        	$.fn.extend( { Admin } );

	        	console.log('Honey May');

	        	console.log( $.fn );

	       		console.log( $.fn.Admin );

	        } )( jQuery );
	  		/* Not working */

	  //       function Person(first, last, age, eyecolor) {
			//     this.firstName = first;
			//     this.lastName = last;
			//     this.age = age;
			//     this.eyeColor = eyecolor;
			//     this.nationality = "English";
			// }

			// function makesound ( argument ) {
			// 	console.log( this.sound );
			// }

			// var animal = { makesound };
			// var dog = { sound: 'woof' };

			// var prarie_dog = {
			// 	howl : function() {
			// 		console.log( this.sound.toUpperCase() )
			// 	}
			// }

			// Object.setPrototypeOf( dog, animal );
			// animal.makesound = function () {
			// 	console.log( 'name' );
			// }

			// dog.makesound();
			// Object.setPrototypeOf( prarie_dog, dog );
			// prarie_dog.howl();
	        // console.log(myVar);

	   //      let talk = function () {
				// console.log(this);
				// console.log(this.sound);
	   //      }

	   //      let boromir = {
	   //      	speak: talk,
	   //      	sound: 'One does not simply walk into mordor!'
	   //      }

	   //      boromir.speak();
	   //      talk();

	   	// function Person ( saying ) {
	   	// 	this.saying = saying;
	   	// }

	   	// Person.prototype.talk = function () {
	   	// 	console.log( 'Isay:', this.saying );
	   	// }

	   	// function spawn ( constructor ) {
	   	// 	var obj = {};
	   	// 	Object.setPrototypeOf( obj, constructor.prototype )
	   	// 	// console.log( constructor );
	   	// 	// console.log( arguments[1] );
	   	// 	constructor.apply( obj, [arguments[1]] );
	   	// 	return obj;
	   	// }

	   	// var crockford = spawn( Person, 'SEMICOLONS!!!lone1' );
	   	// crockford.talk();

	   	// var orders = [
	   	// 	{ amount: 250 },
	   	// 	{ amount: 400 },
	   	// 	{ amount: 100 },
	   	// 	{ amount: 325 }
	   	// ];

	   	// var totalAmount = orders.reduce( ( ( sum, order ) => sum + order.amount ), 0 );

	   	// console.log( totalAmount );

	   	// import fs from 'fs';

	  //  	var sample_obj = [

	  //  		[
		 //   		'Name1' , 	{
			// 		   			name: 		'SampleName1',
			// 		   			price: 		100,
			// 		   			quantity: 	10
			//    				},
			// ],
			// [
		 //   		'Name2'	, 	{
			// 		   			name: 		'SampleName2',
			// 		   			price: 		100,
			// 		   			quantity: 	10
			// 		   		},
			// ],
			// [
		 //   		'Name3'	, 	{
			// 		   			name: 		'SampleName3',
			// 		   			price: 		100,
			// 		   			quantity: 	10
			// 		   		},
			// ],
			// [
		 //   		'Name4'	, 	{
			// 		   			name: 		'SampleName4',
			// 		   			price: 		100,
			// 		   			quantity: 	10
			// 		   		},
			// ]

	  //  	];

	  //  	var output = sample_obj.reduce( ( customers, line ) => {
	  //  											// console.log( customers );
	  //  											var temp_name = line[ 0 ];
	  //  											var temp_desc = line[ 1 ];
	  //  											// console.log( temp_name );
	  //  											// console.log( temp_desc.name );

	  //  											customers[ temp_name ] = customers[ temp_name ] || [];
	  //  											customers[ temp_name ].push(
	  //  											                            {
			// 																	name: 		temp_desc.name,
			// 																	price: 		temp_desc.price,
			// 																	quantity: 	temp_desc.quantity,
	  //  											                            }
			// 															);

	  //  											return customers;
	  //  									},
	  //  									[]
	  //  								);

	  //  	// console.log( sample_obj );
	  //  	console.log( output );

		// function string_one ( first_string ) {
		// 	return 	function string_two ( secong_string ) {
		// 				return 	function string_three ( third_string ) {
		// 							return first_string + ' ' + secong_string + ' ' + third_string;
		// 						}
		// 			}
		// }


		</script>

	</body>
</html>
