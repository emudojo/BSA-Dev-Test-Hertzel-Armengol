# Blacksmith Frontend Developer Test

## Getting Started

- You can change the IDE theme color from your Replit Home page, in the side bar
- You can change the IDE panes layout from Tools > Settings
- Make sure to hit Run at the top of this page to start the server
- This will open a Webview tab with the rendered website
- Use these credentials to complete the http auth:
	- Username: `blacksmith`
	- Password: `AG1TLWe0`
- You can make sure that the necessary dependencies are correctly installed by doing `npm install`
- After installing your NPM dependencies, within the project, you can run the following commands to work with the developer tools bootstrapped to the project:
	- Start development environment and watch file changes `npm start`
	- Build all assets of the project for production `npm run build`


## Structure

We're using [Gulp](https://gulpjs.com/) to generate our static files into the `dist` folder.

Any assets that need to be added to the project will need to be added into the `src` folder within the project.

- CSS/SASS files are imported through `index.scss` within the `/src/scss` folder. All CSS is being compiled with auto-generated prefixes for all CSS elements using [CSSNext](https://cssnext.github.io/)
- JS files are imported through `index.js` within the `/src/js` folder. All JS is being compiled to a browser compatible format using [Babel](https://babeljs.io/). As a result, you can employ the use of ES6+ features if desired.
- Images are also being minified and can be placed within the `/src/images` folder to take advantage of this feature of the project.


## Test Instructions

1.) Review the provided design mockups provided in [BSA Dev Test - Figma Design](https://www.figma.com/file/UBvw22M97fuzaR319laPor/BSA-Frontend-Dev-Test?type=design&node-id=0%3A1&t=lAoYaRUf0pTC1eC7-1) You will see three frames: `Mobile Navigation` `Mobile Design` and `Desktop Design` which will indicate the expected finalized outcome of the page.

2.) Build the Culture section based on the design provided (exported image assets can be found under `/src/images/culture`).

3.) Develop a JavaScript-powered anchor scrolling functionality for each section within the page menu. Additionally, enable scrolling on "To Top" button in the footer.

- You are allowed to use any and all dependencies that you deem necessary for accomplishing the goal of completing the page. Dependencies can be added in any manner you wish to add them.


## Troubleshooting

### Terminal error output when running `npm start` or `npm run build`.

The Replit environment sometimes throws an error when trying to run the image optimization process, if this happens; follow these steps: 

- Go to `gulpfile.babel.js` and comment out lines `208` through `212`
- Run `npm start` or `npm run build` again.
- Uncomment the lines again and run the build again.


## Submission

Once you complete the test, make sure to notify your recruiter via email.

Good luck!