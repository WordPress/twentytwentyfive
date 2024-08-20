# Twenty Twenty-Five

Welcome to the development repository for the default theme that will launch with [WordPress 6.7](https://make.wordpress.org/core/6-7/).

## About

While ideating Twenty Twenty-Five, one recurring idea was that simple things should be intuitive while complex things should be possible. This concept of simplicity and complexity leads to a reliable foundation for extending a default WordPress experience to make it yours.

Twenty Twenty-Five embodies ultimate flexibility and adaptability, showcasing the many ways WordPress enables people to tell their stories with many patterns and styles to choose from. The glimpses of natural beauty and ancestry woven into the theme evoke ideas of impermanence, the passage of time, and continuous evolution.

[Introducing Twenty Twenty-Five](https://make.wordpress.org/core/2024/08/15/introducing-twenty-twenty-five/)

Twenty Twenty-Five is built as a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/). The theme aims to ship with as little CSS as possible: our goal is for all theme styles to be configured through [`theme.json`](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and editable through Global Styles. The theme development team will work closely with [Gutenberg](https://github.com/wordpress/gutenberg) contributors to build design tools in the block editor that enable this goal.

## Contributing

Connect your GitHub account to your WordPress.org account to receive props for your contributions.
Please see the tutorials on [Linking your GitHub and w.org profiles](https://make.wordpress.org/core/handbook/tutorials/linking-your-github-and-w-org-profiles/).

If you would like to contribute code, the list of [open issues](https://github.com/WordPress/twentytwentyfive/issues) is a great place to start looking for tasks. [Pull requests](https://github.com/WordPress/twentytwentyfive/pulls) are preferred when linked to an existing issue.

Contributing is not just for developers! There are many opportunities to help with [testing](#getting-started), triage, discussion, design, building patterns and templates, and more. Please look through [open issues](https://github.com/WordPress/twentytwentyfive/issues), and join in wherever you feel most comfortable.

If you'd like to help with triage, open a new issue and one of the maintainers will help you get set up with the ability to add labels to issues and PRs.

### Getting Started

To get started with development:

1. Set up a WordPress instance, we recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/) or [Local](https://localwp.com/) as an alternative to Docker. Alternatively you can use [WordPress Playground](https://developer.wordpress.org/playground/) to test the theme directly in the browser.
2. Install the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/)
3. Clone / download this repository into your `/wp-content/themes/` directory.

Also, consider enabling [development mode](https://make.wordpress.org/core/2023/07/14/configuring-development-mode-in-6-3/) with `define( 'WP_DEVELOPMENT_MODE', 'theme' );` in your `wp-config.php`. This will help minimize caching of `theme.json` while you're developing.

To enable development mode using [WP CLI](https://developer.wordpress.org/cli/commands/config/set/) use the following command in your terminal inside your installation directory `wp config set 'WP_DEVELOPMENT_MODE' true --raw`.

### Pattern creation guidelines

[Reference guide for patterns in the handbook](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/).
A few things to have in mind when building patterns for the default theme:

- **Category selection**

When creating WordPress block patterns, it's important to carefully choose the appropriate category for your pattern. WordPress provides a set of default categories, each serving a specific purpose. Let's stick to using the default categories. We can add multiple of them separating them by commas. The list of the slug is [here](https://github.com/WordPress/gutenberg/blob/c20350c1d246163201375f090b0b7b4ab49b1dad/packages/block-editor/src/components/inserter/block-patterns-tab.js#L35).

- **Hiding patterns from the inserter**

You can control the visibility of your block pattern in the inserter by adding the following line of code when registering the pattern:

We do this for patterns we don't want the user to access via the inserter or the pattern library. This is usually the case for utility patterns that we create for translation purposes such as the 404 pattern.

We do this by adding the following line:

` * Inserter: no`

Let's prefix hidden patterns using `hidden-` when we name the pattern file.

- **Different translation functions and when to use them**

WordPress block patterns should be [internationalized](https://developer.wordpress.org/apis/internationalization/internationalization-guidelines/) to make them accessible to a global audience.

`esc_html_x()`: Employ this function when you need to translate and escape text for display within HTML. It's useful for multilingual websites as it provides translation support while also ensuring HTML safety.

`esc_html__()`: Similar to `esc_html_x()`, use this function for translating and escaping HTML-embedded text. It's a simpler version when context-specific translations are not needed.

`esc_attr__()` and `esc_attr_x()`: Use this function to escape and sanitize text meant for HTML attributes, such as image source URLs or link targets. It helps prevent security vulnerabilities by ensuring that user inputs are safe for use in attributes.

`esc_html_e`: works just like `esc_html__()` but you don't need to use `echo` to output the string

When we have simple HTML tags in our translatable strings we would use `echo wp_kses_post( __( 'Lorem ipsum <em>Hello</em> dolor sit amet.', 'textdomain' ) );`. This syntax is clearer for translators than using `sprintf()` and it allows them to remove the markup if it doesn't work on their own language.

These functions enhance security and support localization efforts in WordPress block patterns, ensuring that text is safe and can be easily translated.

- **Patterns with images**

To create dynamic image links in your block patterns, utilize the `get_template_directory_uri()` function. This function retrieves the URL of the current theme's directory, ensuring that the image links are relative to the theme and work correctly even if the website's directory structure changes or if we are using a child theme. This is essential for maintaining the stability and portability of your patterns.

Make sure to add alt text to your images and to make sure to remove the IDs from them. An example would be:

```
<!-- wp:image {"id":125,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="http://wp-stable.test/wp-content/themes/twentytwentyfive/assets/images/project.webp" alt="" class="wp-image-125"/></figure>
<!-- /wp:image -->
```

would turn into

```
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/project.webp" alt="<?php echo esc_attr_x( 'Picture of a building', 'Alt text for project picture', 'twentytwentyfive' ); ?>"/></figure>
<!-- /wp:image -->
```

- **Use of Post Types, Block Types and Template Types**

We use Block Types when the pattern uses custom markup for a specific block or one of the default template parts (footer and header). Using this will suggest the pattern when someone inserts said block or template part. This is commonly used for query, post-content block, template or footer.

Template Types is used when we want our pattern as a suggestion for a specific template. In this case we provide the template slug (404, home, single...)

Post Types is used to restrict the post type we want the pattern to be used for. commonly used for full page patterns.

- **Spacing, colors and font sizes**

Using presets for spacing, font sizes, and colors in WordPress block patterns is preferred over hardcoded values for three key reasons:

Consistency: Presets ensure a uniform design across the theme, promoting a cohesive visual identity.

Scalability: They make global design changes easier during development, saving time and effort.

Accessibility: Presets facilitate adherence to accessibility standards, making your patterns more usable and readable for a wider audience.

- **Other tips**

In the same way we remove IDs from image blocks, we need to remove queryId from query blocks too. Also, if any of our template parts have a theme attribute, that needs to remove too.

`<!-- wp:query {"queryId":18,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->`

turns into

`<!-- wp:query {"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->`

and

`<!-- wp:template-part {"slug":"header-portfolio","theme":"twentytwentyfive","area":"header","tagName":"header"} /-->`

turns into

`<!-- wp:template-part {"slug":"header-portfolio","area":"header","tagName":"header"} /-->`

If we are constantly assigning properties to the same block over and over again (ie: border radius to images), consider moving those properties to the theme.json.

When building full page patterns, let's prefix them by using page-

One way to control the order in which patterns are displayed in the inserter is by changing the name of the file (they are sorted alphabetically)

### Tips for Contributors

- As stated above, a goal for the theme is to have as little CSS as possible. Much of the theme's visual treatments should be handled by the Block Editor and Global Styles. As a general rule, if multiple themes would benefit from the CSS you're considering adding, it might reasonably be provided by Gutenberg instead. Let's include clear code comments for any CSS we do include.
- Similarly, let's refrain from building any custom-built PHP or JavaScript-based workarounds for functionality that might reasonably be provided by the Block Editor, let's keep the code simple to help with future maintenance.
- In accordance to those last two bullets, this theme has no required build process.
- Refrain from creating pull requests for translatable strings until all patterns, parts, and templates are completed.

## Discussions

On Wednesdays at [15:00 UTC](https://time.is/1500_in_UTC), there are weekly Slack meetings in the `#core-themes` channel in [Make WordPress Slack](https://make.wordpress.org/chat) (registration required) to coordinate development of the theme. Agenda notes will be posted before meetings and summaries posted after the meeting.


## Requirements

- Gutenberg plugin (latest)
- WordPress 6.6+ (Will be 6.7 at the time of release)
- PHP 7.2.24+
- License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later

Some theme features / PRs may require the development version of Gutenberg and will be described or tagged accordingly.

## Resources

- [The theme design on Figma](https://www.figma.com/design/dzGCSntVch4EQdVERTqyVK/Twenty-Twenty-Five)

- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Theme Developer Handbook](https://developer.wordpress.org/themes/getting-started/what-is-a-theme/)
- [Block Editor Handbook: Global Styles & theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [Block Editor Handbook: theme.json reference](https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/)

## Timeline

The theme will be released with [WordPress 6.7](https://make.wordpress.org/core/6-7/) and follow the key dates / milestones associated with its future development schedule.
