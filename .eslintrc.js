module.exports = {
  env: {
    browser: true,
    commonjs: true,
    es2021: true
  },
  extends: ["eslint:recommended", "plugin:vue/essential"],
  parserOptions: {
    ecmaVersion: 12,
    sourceType: "module"
  },
  plugins: ["vue"],
  rules: {
    semi: [2, "always"],
    quotes: "warn"
  }
};
