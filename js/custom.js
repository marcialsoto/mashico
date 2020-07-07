/**
 * File custom.js.
 *
 */
( function() {
    const glitchTitle = document.getElementsByClassName( 'glitch-title' )[0];

    if ( ! glitchTitle ) {
		return;
    }
    
    glitchTitle.setAttribute("data-text", glitchTitle.textContent);
    console.log(glitchTitle.textContent);

}() );
