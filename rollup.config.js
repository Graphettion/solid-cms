import typescript from "rollup-plugin-typescript"
import uglify from "rollup-plugin-uglify"

export default {
  input: "src/scripts/app.ts",
  output: {
    file: "dist/js/scripts.min.js",
    format: "iife"
  },
  plugins: [
    typescript(),
    uglify.uglify()
  ]
}