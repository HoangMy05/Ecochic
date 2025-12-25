( function( api ) {

	// Extends our custom "super-mart-store" section.
	api.sectionConstructor['super-mart-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );