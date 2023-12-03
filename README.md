# Playground Plugin Admin Notice

Basic example to display an admin notice inside WordPress the WordPress Playground.

It contains the [plugin sourcecode](playground-plugin-admin-notice), the [plugin zip file](playground-plugin-admin-notice.zip), and the [blueprint.json](blueprint.json) to run it.

## How to use

This repo exists to use the `raw` GitHub URLs to load the plugin and the blueprint into the playground.

### WordPress Playground URLs

- Loading the blueprint in the url: [`https://playground.wordpress.net/#{"landingPage":"/wp-admin/","steps":[{"step":"installPlugin","pluginZipFile":{"resource":"url","url":"https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip"}},{"step":"login","username":"admin","password":"password"}]}`](https://playground.wordpress.net/#{"landingPage":"/wp-admin/","steps":[{"step":"installPlugin","pluginZipFile":{"resource":"url","url":"https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip"}},{"step":"login","username":"admin","password":"password"}]})
- Loading the blueprint remotely: [`https://https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip`](https://https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip)

### Override WordPress notice message using options

- Display a custom message: [`https://playground.wordpress.net/#{"landingPage":"/wp-admin/","steps":[{"step":"setSiteOptions","options":{"playground_admin_notice":"This%20is%20a%20custom%20message."}},{"step":"installPlugin","pluginZipFile":{"resource":"url","url":"https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip"}},{"step":"login","username":"admin","password":"password"}]}`](https://playground.wordpress.net/#{"landingPage":"/wp-admin/","steps":[{"step":"setSiteOptions","options":{"playground_admin_notice":"This%20is%20a%20custom%20message."}},{"step":"installPlugin","pluginZipFile":{"resource":"url","url":"https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip"}},{"step":"login","username":"admin","password":"password"}]})

```json
{
  "landingPage": "/wp-admin/",
  "steps": [
    {
      "step": "setSiteOptions",
      "options": {
        "playground_admin_notice": "This is a custom message."
      }
    },
    {
      "step": "installPlugin",
      "pluginZipFile": {
        "resource": "url",
        "url": "https://raw.githubusercontent.com/sejas/playground-plugin-admin-notice/main/playground-plugin-admin-notice.zip"
      }
    },
    {
      "step": "login",
      "username": "admin",
      "password": "password"
    }
  ]
}
```

### How to contribute

Feel free to open an issue or a pull request if you want to suggest any improvement or modification.
