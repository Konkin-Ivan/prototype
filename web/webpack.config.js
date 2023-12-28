const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
module.exports = {
  mode: 'production',
  entry: [path.resolve(__dirname, "assets/bundle.js"), path.resolve(__dirname, "assets/scss/style.scss")],
  output: {
    path: path.resolve(__dirname, 'public/assets'),
    filename: 'js/app.js',
    clean: true,
    assetModuleFilename: 'img/[name][ext]',
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "css/style.css"
    })
  ],
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: 'asset/resource',
      },
    ],
  },

}
