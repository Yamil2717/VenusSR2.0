// 'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.publications-box-input' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;
            
        let FilesUPCount = document.getElementById('FilesUPCount');

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length >= 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();
			if( fileName ) {
                label.querySelector( 'span' ).innerHTML = fileName;
                FilesUPCount.style.display = 'block';
            }
			else
				label.innerHTML = labelVal;
		});
	});
}( document, window, 0 ));