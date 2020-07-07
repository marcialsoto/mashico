/**
 * File custom.js.
 *
 */
( function() {
    const glitchTitle = document.getElementById( 'gitch-title' );

    if ( ! glitchTitle ) {
		return;
    }
    
    glitchTitle.setAttribute("data-text", glitchTitle.textContent);
    console.log(glitchTitle.textContent);

}() );
