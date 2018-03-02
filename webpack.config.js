const path = require('path');
const webpack = require('webpack');

module.exports = {
	entry: './js/index.js',
	output: {
		path: path.resolve(__dirname, 'js'),
		filename: 'bundle.min.js'
	},

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				use: {
					loader: 'babel-loader',
					options: {
					 	presets: ['babel-preset-env']
					}
				}
			}
		]
	},

	plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            "window.jQuery": "jquery"
        }),

        new webpack.optimize.UglifyJsPlugin({
			include: /\.min\.js$/,
			minimize: true
		})
    ],
}