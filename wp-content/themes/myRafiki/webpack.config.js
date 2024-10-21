// Load the Node.js 'path' module, which helps resolve file paths.
const path = require('path');

module.exports = {
    // Entry point: the file Webpack starts bundling from
    entry: './assets/js/main.js',

    // Output: defines where the bundled file will be saved
    output: {
        // Output file name after bundling
        filename: 'bundle.js',
        
        // Path where the bundled file will be placed
        path: path.resolve(__dirname, 'assets/js')
    },

    // Module rules: defines how different file types should be processed
    module: {
        rules: [
            {
                // This rule applies to all JavaScript files
                test: /\.js$/,
                
                // Exclude the node_modules folder from processing
                exclude: /node_modules/,
                
                // Use the Babel loader to transpile ES6+ code to ES5
                use: {
                    loader: 'babel-loader',
                    
                    // Babel presets tell it what transformations to apply
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }
        ]
    }
};
