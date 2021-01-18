const merge = require('webpack-merge');
const common = require('./webpack.common.js');
const path = require('path');

module.exports = merge(common, {
    mode: 'development',
    devtool: 'inline-source-map',
    output: {
        filename: 'build.js',
        path: path.resolve(__dirname, 'dist')
    },
    devServer: {
        compress: true,
        contentBase: path.join(__dirname),
        hot: true,
        publicPath: '/dist/',
        index: '',
        host: 'cirsim.localhost',
        proxy: {
            context: () => true,
            target: 'http://cirsim.localhost'
        }
    }
});
