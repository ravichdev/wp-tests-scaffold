/**
 * WordPress dependencies
 */
const baseConfig = require("@wordpress/scripts/config/jest-e2e.config");

module.exports = {
	...baseConfig,
	verbose: true,
	rootDir: "../../",
	// testMatch: ["<rootDir>/specs/**/*.test.js"],
	transform: {
		"^.+\\.[jt]sx?$":
			"<rootDir>/node_modules/@wordpress/scripts/config/babel-transform",
	},
	// transformIgnorePatterns: ["node_modules"],
	setupFilesAfterEnv: [
		"<rootDir>/tests/e2e/config/setup-test-framework.js",
		"@wordpress/jest-console",
		"@wordpress/jest-puppeteer-axe",
		"expect-puppeteer",
		"puppeteer-testing-library/extend-expect",
	],
	testPathIgnorePatterns: ["/node_modules/"],
};
