/**
 * File custom.js.
 *
 */
( function() {
    const glitchTitle = document.getElementsByClassName( 'glitch-title' )[0];
    const icons = document.getElementsByClassName('icon');

    if ( glitchTitle ) {
		  setGlitch();
    }
    
    if ( icons ) {
		  setIcons();
    }

    function setGlitch() {
      glitchTitle.setAttribute("data-text", glitchTitle.textContent);
    }
    
    function setIcons() {
      for (let icon of icons) {
        let type = icon.dataset.icon ?? 'default';
        let theme = icon.dataset.theme ? '-' + icon.dataset.theme : '';
        let svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        var useWrapper = document.createElementNS("http://www.w3.org/2000/svg", 'use');

        useWrapper.setAttributeNS( "http://www.w3.org/1999/xlink", "xlink:href", wp_vars.home + '/images/svg-defs.svg#icon-' + type + theme );

        svg.setAttribute("width", "1em");
        svg.setAttribute("height", "1em");
        svg.setAttribute("fill", "currentcolor");
        svg.setAttribute("stroke", "currentcolor");
        svg.appendChild(useWrapper);
        icon.appendChild(svg);
        console.log(svg);
      }
    }

}() );
