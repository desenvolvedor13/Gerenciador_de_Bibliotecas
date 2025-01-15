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
                            '@babel/preset-env', // Transforma o código JS moderno
                            ['@babel/preset-react', { 'runtime': 'automatic' }] // JSX Transform para React 18
                        ],
                    },
                },
            },
        ],
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: './app/Views/react_app.php', // Ajuste o caminho correto do template
            filename: '../../app/Views/react_app.php', // Gerar o HTML na pasta certa
        }),
    ],
    resolve: {
        extensions: ['.js', '.jsx'],
    },
};
