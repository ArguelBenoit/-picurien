module.exports = {
  "parser": "babel-eslint",
  "extends": "eslint:recommended",
  "env": {
    "browser": true,
    "es6": true,
    "node": true,
    "mocha": true,
    "commonjs": true
  },
  "ecmaFeatures": {
    "jsx": true
  },
  "rules": {
    "comma-dangle": 1,
    "no-console": 0,
    "no-trailing-spaces": 1,
    "quotes": [2, "single"],
    "semi": 1,
    "strict": 0
  }
};
