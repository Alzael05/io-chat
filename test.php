<!DOCTYPE>
<html lang="en-US">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>

    <form>
        Date Of Birth:
        <input type="date" name="date of birth" id="date" />

        <button type="button"
                id="btnAge"
                name="btnAge"
                onclick="app.set_age();"
                >
            Submit
        </button>

        <button type="button"
                id="btnZodiac"
                name="btnZodiac"
                onclick="app.chinese_zodiac();"
                >
            Your Chinese Zodiac
        </button>

    </form>

    <script type="text/javascript">

        var app = ( function () {

            var today            = new Date();
            var present_month    = today.getMonth();
            var present_year     = today.getFullYear();
            var present_date     = today.getDate();


            var zodiacs = {
                            0    : 'Monkey'     ,
                            1    : 'Rooster'    ,
                            2    : 'Dog'        ,
                            3    : 'Pig'        ,
                            4    : 'Rat'        ,
                            5    : 'Ox'         ,
                            6    : 'Tiger'      ,
                            7    : 'Rabbit'     ,
                            8    : 'Dragon'     ,
                            9    : 'Snake'      ,
                            10   : 'Horse'      ,
                            11   : 'Sheep'      ,
                        };

            function _get_birth_details () {

                var input_date  = document.getElementById( 'date' ).value;
                var date        = new Date( input_date );

                return {
                    input_date      : input_date,
                    date            : date,
                    birth_year      : date.getFullYear(),
                    birth_month     : date.getMonth(),
                    birth_date      : date.getDate()
                }

            }

            function _getAge () {

                var may = _get_birth_details();

                var age     = present_year - may.birth_year;
                var month   = present_month - may.birth_month;

                // console.log( present_year );
                // console.log( may.birth_year );
                // console.log( age );
                // console.log( month );

                if ( month < 0 || ( month === 0 && present_date < may.birth_date ) )
                {
                    age--;
                }

                return age;

            }

            //Compares calculated age with minimum age and acts according to rules//
            function setAge () {

                var age = _getAge();

                //alert("my age is " + age);
                if ( age >= 1 && age <= 99 )
                {
                    // document.write("Age: ", age);
                    console.log( age );
                }
                else
                {
                    // alert( 'Your age should be from 1 to 99 only' );
                    console.log( 'Your age should be from 1 to 99 only' );
                }

            }

            function get_chinese_zodiac() {

                var may = _get_birth_details();

                remainder = may.birth_year % 12;

                console.log( remainder );
                console.log( may.birth_month );

                if ( may.birth_month < 2 )
                {
                    remainder--;
                }

                console.log( remainder );

                if ( zodiacs[ remainder ] !== 'undefined' )
                {
                    alert( 'Your animal sign is ' + zodiacs[ remainder ] );
                }

            }

            return {
                    set_age: setAge,
                     chinese_zodiac  : get_chinese_zodiac
            }

        } )();

    </script>

    <?php

        // $x = 1;

        // while ( $x <= 20)
        // {
        //     if (condition) {
        //         # code...
        //     }
        // }

     ?>

    <script type="text/javascript" src="testing.js" ></script>

</body>
</html>
