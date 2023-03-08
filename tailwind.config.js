const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "tailwind.safelist.txt",
    ],

    plugins: [
        require("tailwind-scrollbar-hide"),
        require("@tailwindcss/typography"),
    ],
    theme: {
        container: {
            center: true,
            padding: "2rem",
        },
        colors: {
            white: "#ffffff",
            black: "#000000",
            red: "#E1370F",
            teal: "#276168",
            "teal-light": "#276168",
            lilac: "#E7BEFF",
            gray: "#ECEBE7",
            transparent: "#ffffff00",
        },
        fontFamily: {
            sans: ['"Neue Haas"', ...defaultTheme.fontFamily.sans],
        },
        extend: {
            maxWidth: {
                "8xl": "90rem",
            },
        },
    },
};
