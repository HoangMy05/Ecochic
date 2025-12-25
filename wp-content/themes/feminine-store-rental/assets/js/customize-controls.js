( function( api ) {

	// Extends our custom "feminine-store-rental" section.
	api.sectionConstructor['feminine-store-rental'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );