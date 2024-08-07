import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        colors: {
            "danger-300": "#ff204e",
            "danger-500": "#ba1221",
            "danger-700": "#a0153e",
            "ungu-700": "#5d0e41",
            "biru-700": "#00224d",
            "hitam-500": "#343537",
        },
        fontFamily: {
            body: [
                "Segoe UI",
                "Roboto",
                "Helvetica Neue",
                "Arial",
                "Noto Sans",
                "sans-serif",
                "Segoe UI Emoji",
                "Segoe UI Symbol",
                "Noto Color Emoji",
            ],
            jakartaEuy: ["Plus Jakarta Sans"],
        },
        screens: {
            nol: "0px",
            xs: "475px",
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
            "3xl": "1920px",
            "4xl": "2560px",
        },
        extend: {
            boxShadow: {
                custom: "0px 7px 29px 0px rgba(100, 100, 111, 0.2)",
                custom2: "0px 3px 8px rgba(0, 0, 0, 0.24)",
                custom3: "0 0 10px rgba(7, 7, 7, 0.527)",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
