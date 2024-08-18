/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#4F46E5", // A striking blue-purple
                secondary: "#D97706", // A vibrant orange
                accent: "#10B981", // A refreshing green
                background: "#1E293B", // A deep navy for backgrounds
                lightGray: "#F3F4F6", // A soft gray for forms
                danger: "#EF4444", // A strong red for errors
            },
            fontFamily: {
                sans: ["Inter", "sans-serif"], // Sleek modern font
            },
        },
    },
    plugins: [],
};
