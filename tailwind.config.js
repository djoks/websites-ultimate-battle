/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      screens: {
        sm: "576px",
        md: "768px",
        lg: "992px",
        xl: "1200px",
        xxl: "1400px",
        "3xl": "1600px",
        "4xl": "1800px",
      },
      colors: {
        g900: "#1a1942",
        g700: "#2a2952",
        g600: "#3a3962",
        g500: "#4a4972",
        g400: "#5a5982",
        g300: "#f9e934",
        g80: "#9494a8",
        g50: "#bfbfc8",
        g60: "#b0b0b8",
        g40: "#dedee0",
        g20: "#F5F5F5",

        bg1: "rgba(255, 255, 255, 0.04)",
        bg2: "rgba(255, 255, 255, 0.08)",
        bg3: "rgba(255, 255, 255, 0.16)",
        bg4: "rgba(255,255,255,0.02)",
        bg5: "rgba(255, 255, 255, 0.12)",
      },
      padding: {
        25: "100px",
        30: "120px",
        15: "60px",
      },
    },
  },
  plugins: [],
};
