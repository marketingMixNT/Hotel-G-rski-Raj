/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./vendor/awcodes/filament-curator/resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                "3xl": "1920px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#ffffff",
                    600: "#eae7e3",
                },
                secondary: {
                    100:"#555555",
                    200: "#242424",
                    400: "#000000",
                    // 600:'#8c6842'
                },
                third: {
                    400: "#d4b67d",
                    // 600:'#8c6842'
                },

                bgPrimary: "#eae7e3",
                // bgSecondary: "#202e20",
                // bgThird: "#fdf0e2",
                // bgFourth:'#f1cfc3',

                fontWhite: "#ffffff",
                fontBlack: "#222",

                fontPrimary: "#bf9b30",
                // fontSecondary:"#fab6ae",
                // fontThird:"#676e5c"
            },
            fontFamily: {
                text: ["Hind", "sans-serif"],
                heading: ["Playfair", "serif"],
                handwritting: ["Dancing Script", "cursive"],
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
    ],
};
