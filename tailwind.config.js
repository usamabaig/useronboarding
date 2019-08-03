// See default config https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  prefix: 'tw-',
  theme: {
  	//colors: colors,
    extend: {
		colors: Object.assign(colors, {
			'linkColor': 'royalblue',   // other options: royalblue, #ef5753, steelblue;
			'linkHoverColor': 'darkblue',
			'primaryButtonColor': colors.blue['500'],
			'primaryButtonHoverColor': colors.blue['600'],
			'ctaButtonColor': colors.red['500'],
			'ctaButtonHoverColor': colors.red['600'],
			'panelColor': colors.blue['800'], // other options: colors['teal-darker'], colors['primaryButtonColor']
		}),
		fontFamily: {
			/* Base font family to use */
			base: [
				'Nunito',
				'sans-serif'
			],
			/* Sofia Pro font. font-family: sofia-pro,sofia pro,Helvetica,Arial,sans-serif; */
			sofia: [
				'sofia-pro',
				'sofia pro',
				'Helvetica',
				'Arial',
				'sans-serif'
			],
			/* font family for the Logo */
			logo: [
				'Crafty Girls',
				'cursive'
			],
			/* font family to use for Cursive / Handwriting */
			hand: [
				'Caveat',
				'cursive'
			],
		},

    }
  },
  variants: {},
  plugins: []
}

