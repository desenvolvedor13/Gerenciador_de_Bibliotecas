const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    mode: 'development',
    entry: './public/assets/js/app.js', // Caminho de entrada
    output: {
        path: path.resolve(__dirname, 'public/assets/js'), // Pasta de saída
        filename: 'bundle.js', // Nome do arquivo gerado
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            '@babel/preset-env',
                            ['@babel/preset-react', { runtime: 'automatic' }],
                        ],
                    },
                },
            },
            {
                test: /\.css$/i, // Processa arquivos CSS
                use: ['style-loader', 'css-loader'], // Aplica os loaders
            },
        ],
    },
    
    plugins: [
        new HtmlWebpackPlugin({
            template: './app/Views/react_app.php', // Caminho do template
            filename: '../../app/Views/react_app.php', // Caminho de saída
        }),
    ],
    resolve: {
    alias: {
      api: path.resolve(__dirname, 'public/assets/js/api')  // Defina um alias para facilitar a importação
    },
    extensions: ['.js', '.jsx']  // Certifique-se de que o Webpack está resolvendo arquivos .js e .jsx
  },
};
