var darkMode = 0;
var body = document.body;
var navigationBar = document.getElementById( "navigationBar" );
// listen for scroll
$( window ).scroll( function DarkFunction(  ) {
    // apply css classes based on the situation
    if (  $( navigationBar ).offset(  ).top > 100  ) {

        $( ".dropDown" ).removeClass( "transparent" );
        $( navigationBar ).removeClass( "transparent" );
        if( darkMode ){
            $( navigationBar ).addClass( "darkMode" );
            $( "#navbarNavDropdown div" ).addClass( "darkMode" );
            $( "#navbarNavDropdown" ).addClass( "darkMode" );
            
        }else{ 
            $( navigationBar ).addClass( "lightMode" );
            $( "#navbarNavDropdown div" ).addClass( "lightMode" );
            $( "#navbarNavDropdown" ).addClass( "lightMode" );
        }
       

    }else{

        $( ".dropDown" ).addClass( "transparent" );
        $( navigationBar ).addClass( "transparent" );
        $( navigationBar ).removeClass( "lightMode" );
        $( navigationBar ).removeClass( "darkMode" );
        $( "#navbarNavDropdown div" ).removeClass( "lightMode" );
        $( "#navbarNavDropdown div" ).removeClass( "darkMode" );
        $( "#navbarNavDropdown" ).removeClass( "lightMode" );
        $( "#navbarNavDropdown" ).removeClass( "darkMode" );
        $( ".dropDown a" ).removeClass( "lightMode" );
        $( ".dropDown a" ).removeClass( "darkMode" );


    }
} );

function darkModeToggle(  ){

    body.classList.toggle("darkMode");
    if( !darkMode ){
        $("footer").addClass("darkMode");
        $( "main div" ).addClass( "darkMode" );
        $( "#left-footer" ).addClass( "darkMode" );
        $( "#right-footer" ).addClass( "darkMode" );
        $( navigationBar ).addClass( "darkMode" );
        $("p").addClass("lightColor");
        darkMode = 1;

    }else{
        $("footer").removeClass("darkMode");
        $( "div" ).removeClass( "darkMode" );
        $( "#left-footer" ).removeClass( "darkMode" );
        $( "#right-footer" ).removeClass( "darkMode" );
        $( navigationBar ).removeClass( "darkMode" );
        $( "#navbarNavDropdown div" ).removeClass( "darkMode" );
        $( "#navbarNavDropdown" ).removeClass( "darkMode" );
        $( "p" ).removeClass( "lightColor" );
        darkMode = 0;

    }

}