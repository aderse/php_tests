function watchClick() {
    // Watch clickable state
    $( '.clickable' ).click( function(e) {
        // Prevent navigation to new page.
        e.preventDefault();
        // Get URL of link clicked
        var loc = $( this ).attr( 'href' );
        // Get results from page trying to load.
        $.ajax({
            type: 'POST',
            url: loc,
            success: function( data ) {
                $( "#output" ).html( data );
            }
        });

        // Output results to div.

    });
}

$( document ).ready( function() {
    watchClick();
});