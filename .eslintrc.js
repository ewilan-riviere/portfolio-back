module.exports = {
    root: true,
    env: {
        browser: true,
        es2021: true,
    },
    extends: [
        // 'eslint:recommended',
        'plugin:vue/essential',
        'plugin:vue/recommended',
        'plugin:prettier/recommended',
    ],
    plugins: ['vue', 'prettier'],
    rules: {},
}
