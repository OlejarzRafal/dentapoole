const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')

const isProduction = process.env.NODE_ENV == 'production'
const port = 3009

const config = {
  entry: './src/ts/index.ts',
  cache: false,
  output: {
    path: path.resolve(__dirname, './assets/js'),
    filename: 'main.js',
    clean: true,
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['**/*', '!main.js', '!style.css'],
    }),
    new MiniCssExtractPlugin({
      filename: '../css/style.css',
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port,
      proxy: 'http://dentalpoole.local',
      files: [
        '*.php',
        '**/*.php',
        'assets/css/**/*.css',
        'assets/js/**/*.js',
        'src/**/*.scss',
        'src/**/*.ts',
      ],
      injectChanges: true,
      notify: true,
      reloadOnRestart: true,
    }),
  ],
  module: {
    rules: [
      {
        test: /\.(ts|tsx)$/i,
        use: [
          {
            loader: 'ts-loader',
            options: {
              transpileOnly: true,
            },
          },
        ],
        exclude: ['/node_modules/'],
      },
      {
        test: /\.s[ac]ss$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader'],
      },
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader'],
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
        type: 'asset',
      },
      {
        test: /\.(png|jpg|gif|svg)$/,
        type: 'assets/resources',
        generator: {
          filename: './img/[name][ext]',
        },
      },
    ],
  },
  resolve: {
    extensions: ['.tsx', '.ts', '.jsx', '.js', '...'],
  },
}

module.exports = () => {
  if (isProduction) {
    config.mode = 'production'
  } else {
    config.mode = 'development'
  }
  return config
}
