const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        cream: '#FFF8E7',
        primary: '#FBBF24',
        darkBg: '#1E293B',
        darkCard: '#334155',
        darkText: '#E2E8F0',
        sidebar: '#C49B70',
        amberLight: '#F59E0B',
        amberDark: '#FBBF24',
        blueLight: '#3B82F6',
        blueDark: '#60A5FA',
        greenLight: '#16A34A',
        greenDark: '#4ADE80',
        redLight: '#EF4444',
        redDark: '#F87171',
        pinkLight: '#EC4899',
        pinkDark: '#F472B6',
        purpleLight: '#8B5CF6',
        purpleDark: '#A78BFA',
        orangeLight: '#F97316',
        orangeDark: '#FB923C',
        tealLight: '#14B8A6',
        tealDark: '#2DD4BF',
        cyanLight: '#06B6D4',
        cyanDark: '#22D3EE',
        roseLight: '#F43F5E',
        roseDark: '#FB7185',
        green2Light: '#10B981',
        green2Dark: '#34D399',
        indigoLight: '#6366F1',
        indigoDark: '#818CF8',
      },
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      borderRadius: {
        xl: '1rem',
      },
      boxShadow: {
        'md-light': '0 4px 6px rgba(0,0,0,0.05)',
        'lg-light': '0 10px 15px rgba(0,0,0,0.1)',
      },
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
