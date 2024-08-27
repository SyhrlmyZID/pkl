module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
      extend: {
        colors: {
          // Jika ingin menambahkan color custom masukan disini
          varBlue:"#2c7d9d",
          varBlueHover:"#30708a",
          varColor1: "#000",
          varColor2: "#000",
          varColor3: "#000",
        }
      },
  },
  plugins: [require("flowbite/plugin")],
};
