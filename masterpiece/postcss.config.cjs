// module.exports = {
//     plugins: {
//         tailwindcss: {},
//         autoprefixer: {},
        
//     },
// };

    module.exports = {
        plugins: [
          require('postcss-import'),
          require('tailwindcss'),
          require('autoprefixer'),
          // ... other PostCSS plugins
         
        ],
      };