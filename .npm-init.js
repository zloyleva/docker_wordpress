module.exports = {
    version: "1.0.0",
    main: "index.js",
    name: "app",
    author: "2level_up",
    license: "MIT",
    homepage: "localhost/",
    scripts: {
        dev: "NODE_ENV=development webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
        watch: "NODE_ENV=development webpack --watch --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
        hot: "NODE_ENV=development webpack-dev-server --inline --hot --config=node_modules/laravel-mix/setup/webpack.config.js",
        production: "NODE_ENV=production webpack --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
    }
}